                <script src="<?php echo base_url() ?>assets/bootstrap/js/jquery.min.js"></script>
                <script src="<?php echo base_url() ?>assets/bootstrap/js/popper.js"></script>
                <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
                <script src="<?php echo base_url() ?>assets/bootstrap/js/main.js"></script>
                <script>
                    var close = document.getElementsByClassName("close");
                    var i;

                    for (i = 0; i < close.length; i++) {
                        close[i].addEventListener("click",
                            function() {
                                this.parentElement.style.display = 'none';
                            });
                    }
                </script>
                <!-- <script>
                    var btnContainer = document.getElementsByClassName("navbar-nav");

                    var btns = btnContainer.getElementsByClassName("nav-item");

                    for (var i = 0; i < btns.length; i++) {
                        btns[i].addEventListener("click", function() {
                            var current = document.getElementsByClassName("active");

                            if (current.length > 0) {
                                current[0].className = current[0].className.replace(" active", "");
                            }

                            this.className += " active";
                        });
                    }
                </script> -->
                </body>

                </html>