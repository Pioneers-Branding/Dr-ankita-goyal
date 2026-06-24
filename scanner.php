<?php
// Simple Malware & Spam Scanner for Dr. Ankita Website
// Upload this file to your public_html folder on Hostinger
// Run it by visiting: https://drankitalaparoscopy.in/scanner.php
// IMPORTANT: Delete this file from your server after cleaning up!

header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Website Security Scan</title>
    <style>
        body { font-family: sans-serif; margin: 40px; background: #f4f6f9; color: #333; }
        h1 { color: #0F2E57; }
        .success { color: green; font-weight: bold; }
        .danger { color: red; font-weight: bold; }
        .warning { color: orange; font-weight: bold; }
        .file-list { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
        .file-item { border-bottom: 1px solid #eee; padding: 10px 0; font-family: monospace; }
    </style>
</head>
<body>
    <h1>Website Security Scanner</h1>
    <p>Scanning files in <strong><?php echo htmlspecialchars(__DIR__); ?></strong>...</p>
    <div class="file-list">
        <?php
        $findings = 0;
        
        function scanDirectory($dir) {
            global $findings;
            $files = scandir($dir);
            foreach ($files as $file) {
                if ($file === '.' || $file === '..' || $file === 'scanner.php' || $file === '.git') continue;
                $path = $dir . '/' . $file;
                
                if (is_dir($path)) {
                    scanDirectory($path);
                } else {
                    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                    $filename = basename($path);
                    
                    // Check 1: Unexpected PHP files in static assets folders
                    if ($ext === 'php' && (strpos($path, '/images') !== false || strpos($path, '/css') !== false || strpos($path, '/js') !== false)) {
                        echo "<div class='file-item'><span class='danger'>[CRITICAL] Unexpected PHP file in assets folder:</span> " . htmlspecialchars($path) . "</div>";
                        $findings++;
                        continue;
                    }
                    
                    // Check 2: Check contents of PHP and .htaccess files
                    if ($ext === 'php' || $filename === '.htaccess' || $ext === 'ini') {
                        $content = @file_get_contents($path);
                        if ($content !== false) {
                            $suspect = false;
                            $reasons = [];
                            
                            // Check for Googlebot User-Agent detection (cloaking signature)
                            if (preg_match('/(googlebot|bingbot|yahoo|slurp|yandex)/i', $content)) {
                                $suspect = true;
                                $reasons[] = "Detects Search Engine Bots (User-Agents)";
                            }
                            
                            // Check for common obfuscation signatures
                            if (preg_match('/eval\s*\(\s*base64_decode/i', $content) || preg_match('/gzinflate\s*\(\s*base64_decode/i', $content)) {
                                $suspect = true;
                                $reasons[] = "Obfuscated code (eval + base64_decode)";
                            }
                            
                            // Check for auto_prepend_file in INI files
                            if ($ext === 'ini' && stripos($content, 'auto_prepend_file') !== false) {
                                $suspect = true;
                                $reasons[] = "Auto prepend directive (loads scripts silently)";
                            }
                            
                            if ($suspect) {
                                echo "<div class='file-item'><span class='danger'>[SUSPECT] " . implode(', ', $reasons) . ":</span> " . htmlspecialchars($path) . "</div>";
                                $findings++;
                            }
                        }
                    }
                }
            }
        }
        
        scanDirectory(__DIR__);
        
        if ($findings === 0) {
            echo "<p class='success'>Scan complete. No suspicious files or patterns detected in this directory!</p>";
        } else {
            echo "<p class='danger'>Scan complete. Found $findings suspicious items. Please inspect these files on your server.</p>";
        }
        ?>
    </div>
    <hr>
    <p class="warning"><strong>WARNING:</strong> Make sure to delete <code>scanner.php</code> from your server immediately after use so it cannot be accessed by anyone else!</p>
</body>
</html>
