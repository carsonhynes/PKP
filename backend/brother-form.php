<!DOCTYPE html>
<html lang="en">
<head>
    <title>Submission</title>
    <style>
        .major-positions {
            column-count:2;
            -webkit-column-count:2;
            -moz-column-count:2;
            list-style-type: none;
        }

        .minor-positions {
            column-count:3;
            -webkit-column-count:3;
            -moz-column-count:3;
            list-style-type: none;
        }

        .major-container {
            width: 300px;
            padding: 5px 0;
        }

        .minor-container {
            border-top: solid black;
            width: 500px;
            padding: 5px 0;
        }
    </style>
</head>
<body>
<form action="/PKP/backend/submit-brother.php" method="post" enctype="multipart/form-data" onsubmit="return validate(this);">
    <div>
        <label for="name">First Name:</label>
        <input type="text" name="fname" />
    </div>
    <div>
        <label for="name">Last Name:</label>
        <input type="text" name="lname" />
    </div>
    <div>
        <label for="grad">Grad Year:</label>
        <input type="text" name="grad" />
    </div>
    <div>
        <label for="position">Position(s):</label> <br>
        <div class="major-container">
            <ul class="major-positions">
                <li>Archon<input type="checkbox" name="position-check[]" value="archon"></li>
                <li>Vice-Archon<input type="checkbox" name="position-check[]" value="vice-archon"></li>
                <li>Treasurer<input type="checkbox" name="position-check[]" value="treasurer"></li>
                <li>Secretary<input type="checkbox" name="position-check[]" value="secretary"></li>
                <li>Warden<input type="checkbox" name="position-check[]" value="warden"></li>
                <li>Historian<input type="checkbox" name="position-check[]" value="historian"></li>
                <li>Chaplain<input type="checkbox" name="position-check[]" value="chaplain"></li>
            </ul>
        </div>
        <div class="minor-container">
            <ul class="minor-positions">
                <li>ROHM<input type="checkbox" name="position-check[]" value="rohm"></li>
                <li>Stew<input type="checkbox" name="position-check[]" value="stew"></li>
                <li>ROI<input type="checkbox" name="position-check[]" value="roi"></li>
                <li>Social<input type="checkbox" name="position-check[]" value="social"></li>
                <li>Philanthropy<input type="checkbox" name="position-check[]" value="philanthropy"></li>
                <li>Risk Management<input type="checkbox" name="position-check[]" value="risk"></li>
                <li>Sports<input type="checkbox" name="position-check[]" value="sports"></li>
                <li>Scholarship<input type="checkbox" name="position-check[]" value="scholarship"></li>
                <li>Ass Rush<input type="checkbox" name="position-check[]" value="assrush"></li>
                <li>IFC Delegate<input type="checkbox" name="position-check[]" value="ifc"></li>
                <li>MAL<input type="checkbox" name="position-check[]" value="mal"></li>
                <li>VMO<input type="checkbox" name="position-check[]" value="vmo"></li>
                <li>Alumni Sec<input type="checkbox" name="position-check[]" value="alumni"></li>
            </ul>
        </div>
    </div>
    <div style="border-top: solid black; padding-top: 5px; width: 500px;">
        <input style="width: 200px; display: inline-block" type="file" name="pic" accept="image/*">
        Is this Brother active?<select style="display: inline-block; margin-left: 10px;" name="active">
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
    </div>
    <div>
        <button style="margin-top: 10px" type="submit">Submit</button>
    </div>
</form>
</body>
<script>
    if (window.location.href == "http://carson.space/PKP/backend/submit-form.php?") {
        alert("Submitted Successfully");
        window.location = "brother-form.php";
    }

    if (window.location.href == "http://carson.space/PKP/backend/submit-form.php?filetype") {
        alert("Invalid Filetype");
        window.history.back();
    }

    if (window.location.href == "http://carson.space/PKP/backend/submit-form.php?dupe") {
        alert("Duplicate Entry in Database");
        window.history.back();
    }

    if (window.location.href == "http://carson.space/PKP/backend/submit-form.php?too-large") {
        alert("Uploaded Image Too Large");
        window.history.back();
    }

    function validate(formObj) {
        if (formObj.fname.value == "") {
            alert("You must enter a first name");
            formObj.fname.focus();
            return false;
        }

        if (formObj.lname.value == "") {
            alert("You must enter a last name");
            formObj.lname.focus();
            return false;
        }

        if ((formObj.grad.value.length != 4) || (isNaN(formObj.grad.value))) {
            alert("Please enter a 4 digit graduation year");
            formObj.grad.focus();
            return false;
        }

        return true;
    }
</script>
</html>
