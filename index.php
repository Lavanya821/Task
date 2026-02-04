<?php
    include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hospital Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
</head>
<body>

<div class="page-wrapper">
    <div class="form-card">

        <form id="registrationForm">

            <div class="form-step active" data-step="1">

                <div class="form-header">
                    <div>
                        <small>Patient Information</small>
                        <h1>Hospital Registration Form</h1>
                        <p>Patients are required to register their information on this form.</p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Registration Check ID</label>
                        <input type="text" name="check_id">
                    </div>
                    <div class="form-group">
                        <label>Health Care Number <span>*</span></label>
                        <input type="text" name="health_care_number" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Registration Location</label>
                    <input type="text" name="location">
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Registration Date <span>*</span></label>
                        <input type="date" name="reg_date" required>
                    </div>
                    <div class="form-group">
                        <label>Registration Time <span>*</span></label>
                        <input type="time" name="reg_time" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Patient Name</label>
                    <div class="form-row">
                        <input type="text" name="patient_first" placeholder="First">
                        <input type="text" name="patient_last" placeholder="Last">
                    </div>
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address1" placeholder="Street Address">
                    <input type="text" name="address2" placeholder="Street Address Line 2">
                </div>

                <div class="form-row">
                    <input type="text" name="city" placeholder="City">
                    <input type="text" name="region" placeholder="Region">
                </div>

                <div class="form-row">
                    <input type="text" name="zip" placeholder="Postal / Zip Code">
                    <select name="country">
                        <option>Country</option>
                        <option>India</option>
                        <option>USA</option>
                    </select>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="tel" name="phone">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Date of Birth <span>*</span></label>
                        <input type="date" name="dob" required>
                    </div>
                    <div class="form-group">
                        <label>Sex <span>*</span></label>
                        <select name="sex" required>
                            <option value="">Select</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label>Marital Status</label>
                    <select name="marital_status">
                        <option>Single</option>
                        <option>Married</option>
                    </select>
                </div>

                <button type="button" class="btn-next" onclick="nextStep()">Next</button>
            </div>

            <div class="form-step" data-step="2">

                <div class="form-header">
                    <div>
                        <small>Emergency Contact</small>
                    </div>
                    
                </div>

                <div class="form-group">
                    <label>Emergency Contact <span>*</span></label>
                    <div class="form-row">
                        <input type="text" name="emergency_first" placeholder="First" required>
                        <input type="text" name="emergency_last" placeholder="Last" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Relationship <span>*</span></label>
                    <input type="text" name="relationship" required>
                </div>

                <div class="form-group">
                    <label>Contact Number <span>*</span></label>
                    <input type="tel" name="contact_number" required>
                </div>

                <button type="button" class="btn-next" onclick="nextStep()">Next</button>
                <button type="button" class="btn-prev" onclick="prevStep()">Previous</button>
            </div>

            <div class="form-step" data-step="3">

                <div class="form-header">
                    <div>
                        <small>Family Doctor</small>
                    </div>
                </div>

                <div class="form-group">
                    <label>Family Doctor Name</label>
                    <div class="form-row">
                        <input type="text" name="doctor_first" placeholder="First">
                        <input type="text" name="doctor_last" placeholder="Last">
                    </div>
                </div>

                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="tel" name="doctor_phone">
                </div>

                <hr class="divider">

                <div class="form-group">
                    <label>Reason for Registration <span>*</span></label>
                    <input type="text" name="reason" required>
                </div>

                <div class="form-group">
                    <label>Additional Notes</label>
                    <textarea name="notes" rows="4"></textarea>
                </div>

                <div class="form-group">
                    <label>Doctor Name (if applicable)</label>
                    <input type="text" name="ref_doctor">
                </div>

                <div class="form-group">
                    <label>Taking any medication currently?</label>
                    <div class="radio-group">
                        <label class="inline-option">
                            <input type="radio" name="medication" value="Yes"> Yes
                        </label>
                        <label class="inline-option">
                            <input type="radio" name="medication" value="No"> No
                        </label>
                    </div>
                </div>

                <div class="form-group" id="medicationBox" style="display:none;">
                    <label>If yes, please list it here</label>
                    <textarea name="medication_details" rows="4"></textarea>
                </div>
                <button type="submit" class="btn-next">REGISTER PATIENT</button>
                <button type="button" class="btn-prev" onclick="prevStep()">Previous</button>
            </div>

        </form>
    </div>
</div>
<script src="form.js"></script>
</body>
</html>
