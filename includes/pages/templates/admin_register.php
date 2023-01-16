<?php if (!empty($errors)): ?>
    <section class="content">
        <ul class="notification is-danger">
            <?php foreach ($errors as $error): ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </section>
<?php endif; ?>

<h1 class="title mt-4">Register</h1>

<?php if (isset($admin)): ?>
    <section class="columns">
        <form class="column is-6" action="" method="post" enctype="multipart/form-data">
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label" for="username">Username</label>
                </div>
                <div class="field-body">
                    <input class="input" id="username" type="text" name="admin_userName"
                           value="<?= $admin->username; ?>"/>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label" for="password">Password</label>
                </div>
                <div class="field-body">
                    <input class="input" id="password" type="password" name="password" value="<?= $admin->username; ?>"/>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal"></div>
                <div class="field-body">
                    <button class="button is-primary is-fullwidth" type="submit" name="submit">Register</button>
                </div>
            </div>
        </form>
    </section>
<?php endif; ?>
<a class="button mt-4" href="<?= BASE_PATH; ?>admin_login">&laquo; Go Login</a>
