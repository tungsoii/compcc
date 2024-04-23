<main>
    <h1 class="h1module">Modules</h1>
        <section class="module">
        <?php 
            foreach ($modules as $module) {
        ?>
            <div class="module-box">
                <div class="module-banner">
                
                </div>
                <div class="module-name">
                <?= $module['module_name'] ?>
                </div>
            </div>
        <?php 
            }
        ?>
        </section>      
</main>
