<?php 

$title = 'Index';

require_once 'includes/header.php';
require_once 'db/conn.php'; 

$results = $crud->getSpecialties();

?>
<!-- 
    - First Name
    - Last Name 
    - Date of Birth (use datePicker)
    - Specialty (Database Admin, Software Developer, Web Administrator, other)
    - Email Address
    - Contact Number
 -->

    <h1 class="text-center">Registration for IT Conference</h1>

    <form method="post" action="success.php">
            <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input required type="text" class="form-control" id="firstname" name="firstname">
                </div>
            <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input required type="text" class="form-control" id="lastname" name="lastname">
                </div>
            <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob">
                 </div>
            <div class="form-group">
            <label for="specialty">Area of Specialty</label>
            <select class="form-control" id="specialty" name="specialty">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC))  { ?>
                    <option value="<?php echo $r['specialty_id']?>"><?php echo $r['name']; ?></option>
                <?php } ?>
            </select>
                 </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input required type="email" class="form-control" id="email" 
            aria-describedby="emailHelp" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="phone">Contact Number</label>
            <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" name="phone">
            <small id="phoneHelp" class="form-text text-muted">We'll never share your 
            number with anyone else.</small>
        </div>
       
        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
</form>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <?php require_once 'includes/footer.php'; ?>

    