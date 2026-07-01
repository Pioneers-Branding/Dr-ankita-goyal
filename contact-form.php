<style>
    .appointment-form {
        margin-top: 10px;
    }
    .appointment-form .form-group {
        margin-bottom: 15px;
    }
    .appointment-form label {
        display: block;
        font-weight: 600;
        margin-bottom: 6px;
        color: var(--secondary, #333);
        font-size: 0.95rem;
    }
    .appointment-form input,
    .appointment-form textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #cfd8dc;
        border-radius: 8px;
        font-family: inherit;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        background: #fff;
    }
    .appointment-form input:focus,
    .appointment-form textarea:focus {
        border-color: var(--primary, #c2185b);
        outline: none;
        box-shadow: 0 0 0 3px var(--accent, rgba(194, 24, 91, 0.1));
    }
    .appointment-form button {
        width: 100%;
        padding: 14px;
        background: var(--primary, #c2185b);
        color: #fff;
        border: none;
        border-radius: 8px;
        font-size: 1.05rem;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .appointment-form button:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        filter: brightness(1.1);
    }
</style>

<form accept-charset='UTF-8' action='https://app.formester.com/forms/PeoZoWPaY/submissions'
    method='POST' class=''>
    <input type="hidden" name="action" value="submit_form">
    <!-- Capture which service page the patient was looking at -->
    <input type="hidden" name="page_source" value="<?php echo htmlspecialchars($page_title ?? 'General Inquiry'); ?>">
    
    <div class="form-group">
        <label for="side_name">Your Name *</label>
        <input type="text" id="side_name" name="name" required placeholder="Enter your full name" autocomplete="name">
    </div>
    
    <div class="form-group">
        <label for="side_phone">Phone Number *</label>
        <input type="tel" id="side_phone" name="phone" required placeholder="+91 96912 12570" autocomplete="tel">
    </div>
    
    <div class="form-group">
        <label for="side_message">Brief Message (Optional)</label>
        <textarea id="side_message" name="message" rows="3" placeholder="Describe your health concern..."></textarea>
    </div>
    
    <button type="submit">Complete Booking <i class="fas fa-arrow-right" style="margin-left:10px;"></i></button>
</form>
