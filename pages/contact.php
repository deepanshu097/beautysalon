<?php include '/xampp/htdocs/beautysalon/assests/components/header.php' ?>
<?php include '/xampp/htdocs/beautysalon/assests/components/navbar.php' ?>

<?php require '/xampp/htdocs/beautysalon/backend/contact.php'; ?>

<?php require '/xampp/htdocs/beautysalon/assests/allcss/validatation.php'; ?>
<section class="col-10 contact-form m-auto">
    <div class="col-7 contact-form m-auto">
    <form action="" method="POST" class="form">
        <div class="m-5 card p-4 bg-custom-form">
        <div class="form mt-2">
            <label for="full-name">Full Name</label>
            <input type="text" name="name" class="form-control" value=<?php echo $name; ?>>
            <p class="error name-err"><?php echo $Errname; ?></p>
        </div>
        <div class="form mt-2">
            <label for="full-name">Phone Number</label>
            <input type="text" name="phone" class="form-control" value=<?php echo $phone; ?>>
            <span class="error phone-err"><?php echo $Errphone; ?></span>
        </div>
        <div class="form mt-2">
            <label for="full-name">E-mail</label>
            <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
            <span class="error email-err"><?php echo $Erremail; ?></span>
        </div>
        <div class="form mt-2">
            <label for="full-name">Subject</label>
            <input type="text" name="subject" class="form-control" value="<?php echo $subject; ?>">
            <span class="error sub-err"><?php echo $Errsubject; ?></span>
        </div>
        <div class="form mt-2">
            <label for="full-name" class="form-label">Message</label>
            <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea> 
            <span class="error msg-err "><?php echo $Errmessage; ?></span>
        </div>
        <div class="form mt-4 text-center ">
            <button class="btn col-2" name="submit">Submit</button>
        </div>
        <span class="success msg-success "><?php echo $success ?></span>
        </div>
    </form>
    </div>
</section>

<?php include '/xampp/htdocs/beautysalon/assests/components/footer.php' ?>