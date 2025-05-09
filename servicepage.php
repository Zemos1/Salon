<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <div class="nav-bar-content">
        <ul>
            <a href="appointmentdbase.php">Appointment </a>
            <a href="servicepage.php"> Services </a>
            <a href="homepagee (1).php"> About</a>
            <a href=""> Contact </a>
            <?php
            session_start(); // Start the session
            if (isset($_SESSION['username'])) {
                // If user is logged in, show account link
                echo '<li><a href="account.php ">Account (' . htmlspecialchars($_SESSION['username']) . ')</a></li>';
            } else {
                // If not logged in, show login link
                echo '<li><a href="salon_login.html">Login</a></li>';
            }
            ?>
        </ul>
    </div>
</head>
<body>
    
    <div class="service-header">
        <label id="label-head">Services</label>

        <div class="sub-header">
            <ul>
                <li><a href="" data-filter="all">All</a></li>
                <li><a href="" data-filter="haircut">Haircut</a></li>
                <li><a href="" data-filter="haircolor">Hair Coloring</a></li>
                <li><a href="" data-filter="rebonding">Rebonding</a></li>
                <li><a href="" data-filter="perming">Perming</a></li>
                <li><a href="" data-filter="keratin">Keratin Therapy</a></li>
            </ul>
        </div>
    </div>

    <div class="service-content">
        <section class="haircut-section" data-category="haircut">
            <label class="label-service">Haircut</label>
            <div class="layer1">
                <div class="service-container">
                    <div class="service-cover">
                        <label>Haircut for women</label>
                    </div>
                    <div class="service-info">
                        <p>none atm</p>
                        <button class="services-btn">Book an appointment</button>
                    </div>
                </div>
                <div class="service-container">
                    <div class="service-cover">
                        <label>Haircut for men</label>
                    </div>
                    <div class="service-info">
                        <p>none atm</p>
                        <button class="services-btn">Book an appointment</button>
                    </div>
                </div>
            </div>

            <!--layer2-->

            <div class="layer2">
                <div class="service-container">
                    <div class="service-cover">
                        <label>Haircut for women</label>
                    </div>
                    <div class="service-info">
                        <p>none atm</p>
                        <button onclick="window.location.href='appointmentdbase.php'" class="services-btn">Book an appointment</button>
                    </div>
                </div>
                <div class="service-container">
                    <div class="service-cover">
                        <label>Haircut for men</label>
                    </div>
                    <div class="service-info">
                            <p>none atm</p>
                            <button class="services-btn">Book an appointment</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="haircoloring-section" data-category="haircolor">
            <label class="label-service">Hair Coloring</label>
            <div class="layer1">
                <div class="service-container">
                    <div class="service-cover">
                        <label>Haircut for women</label>
                    </div>
                    <div class="service-info">
                        <p>none atm</p>
                        <button class="services-btn">Book an appointment</button>
                    </div>
                </div>
                <div class="service-container">
                    <div class="service-cover">
                        <label>Haircut for men</label>
                    </div>
                    <div class="service-info">
                        <p>none atm</p>
                        <button class="services-btn">Book an appointment</button>
                    </div>
                </div>
            </div>

            <!--layer2-->

            <div class="layer2">
                <div class="service-container">
                    <div class="service-cover">
                        <label>Haircut for women</label>
                    </div>
                    <div class="service-info">
                        <p>none atm </p>
                        <button class="services-btn">Book an appointment</button>
                    </div>
                </div>
                <div class="service-container">
                    <div class="service-cover">
                        <label>Haircut for men</label>
                    </div>
                    <div class="service-info">
                            <p>none atm</p>
                            <button class="services-btn">Book an appointment</button>
                    </div>
                </div>
            </div>
        </section>


        <section class="rebonding-section" data-category="rebonding">
            <label class="label-service">Rebonding</label>
            <div class="layer1">
                <div class="service-container">
                    <div class="service-cover">
                        <label>Haircut for women</label>
                    </div>
                    <div class="service-info">
                        <p>none atm</p>
                        <button class="services-btn">Book an appointment</button>
                    </div>
                </div>
                <div class="service-container">
                    <div class="service-cover">
                        <label>Haircut for men</label>
                    </div>
                    <div class="service-info">
                        <p>none atm</p>
                        <button class="services-btn">Book an appointment</button>
                    </div>
                </div>
            </div>

            <!--layer2-->

            <div class="layer2">
                <div class="service-container">
                    <div class="service-cover">
                        <label>Haircut for women</label>
                    </div>
                    <div class="service-info">
                        <p>none atm </p>
                        <button class="services-btn">Book an appointment</button>
                    </div>
                </div>
                <div class="service-container">
                    <div class="service-cover">
                        <label>Haircut for men</label>
                    </div>
                    <div class="service-info">
                            <p>none atm</p>
                            <button class="services-btn">Book an appointment</button>
                    </div>
                </div>
            </div>
        </section>


        <section class="perming-section" data-category="perming">
            <label class="label-service">Perming</label>
            <div class="layer1">
                <div class="service-container">
                    <div class="service-cover">
                        <label>Haircut for women</label>
                    </div>
                    <div class="service-info">
                        <p>none atm</p>
                        <button class="services-btn">Book an appointment</button>
                    </div>
                </div>
                <div class="service-container">
                    <div class="service-cover">
                        <label>Haircut for men</label>
                    </div>
                    <div class="service-info">
                        <p>none atm</p>
                        <button class="services-btn">Book an appointment</button>
                    </div>
                </div>
            </div>

            <!--layer2-->

            <div class="layer2">
                <div class="service-container">
                    <div class="service-cover">
                        <label>Haircut for women</label>
                    </div>
                    <div class="service-info">
                        <p>none atm </p>
                        <button class="services-btn">Book an appointment</button>
                    </div>
                </div>
                <div class="service-container">
                    <div class="service-cover">
                        <label>Haircut for men</label>
                    </div>
                    <div class="service-info">
                            <p>none atm</p>
                            <button class="services-btn">Book an appointment</button>
                    </div>
                </div>
            </div>
        </section>



        <section class="keratin-section" data-category="keratin">
            <label class="label-service">Keratin</label>
            <div class="layer1">
                <div class="service-container">
                    <div class="service-cover">
                        <label>Haircut for women</label>
                    </div>
                    <div class="service-info">
                        <p>none atm</p>
                        <button class="services-btn">Book an appointment</button>
                    </div>
                </div>
                <div class="service-container">
                    <div class="service-cover">
                        <label>Haircut for men</label>
                    </div>
                    <div class="service-info">
                        <p>none atm</p>
                        <button class="services-btn">Book an appointment</button>
                    </div>
                </div>
            </div>

            <!--layer2-->

            <div class="layer2">
                <div class="service-container">
                    <div class="service-cover">
                        <label>Haircut for women</label>
                    </div>
                    <div class="service-info">
                        <p>none atm </p>
                        <button class="services-btn">Book an appointment</button>
                    </div>
                </div>
                <div class="service-container">
                    <div class="service-cover">
                        <label>Haircut for men</label>
                    </div>
                    <div class="service-info">
                            <p>none atm</p>
                            <button class="services-btn">Book an appointment</button>
                    </div>
                </div>
            </div>
        </section>

    </div>

    
    <script>
        const serviceContainers = document.querySelectorAll('.service-container');
        const filterBtn = document.querySelectorAll('.sub-header a');
        const filterCard = document.querySelectorAll('.service-content section')

        serviceContainers.forEach(container => {
            const cover = container.querySelector('.service-cover');
            const info = container.querySelector('.service-info');

            cover.addEventListener('click', () => {
                cover.style.display = 'none';
                info.style.display = 'block';
            });

            info.addEventListener('click', () => {
                info.style.display = 'none';
                cover.style.display = 'block';
            });
        });

        filterBtn.forEach(link => {
            link.addEventListener('click', e =>{
                e.preventDefault();
                const filter = link.getAttribute('data-filter');
                
                filterCard.forEach(section =>{
                    if(filter === 'all' || section.getAttribute('data-category') === filter){
                        section.style.display = 'block';
                    } else {
                        section.style.display = 'none';
                    }
                });
            });
        });
    </script>

</body>
</html>