            
            
            </div> <!-- Content End -->
        </div> <!-- Wrapper End -->

            <!-- Page Scripts -->
        <script src="<?php echo $assets; ?>js/plugins/jquery.min.js"></script>
        <script src="<?php echo $assets; ?>js/plugins/bootstrap.min.js"></script>
        
        <?php 
            foreach ($scripts as $script) { 
                echo '<script type="text/javascript" src="'.$script.'"></script>';
            }
        ?>
        

    </body>
</html>