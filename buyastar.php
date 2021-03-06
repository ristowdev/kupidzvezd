<!DOCTYPE html>
<html>
<head> 
<!-- <base href="/"> -->

    <title>TheRistow Tasty | Дома</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">  
    <link rel="icon" type="image/png" href="images/guruuuu.png" sizes="32x32">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script> 


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <style>
        
        @font-face{
            font-family: GilroyLight;
            src: url(fonts/GilroyLight.ttf) format("truetype");
        }

        @font-face{
            font-family: GilroyMedium;
            src: url(fonts/GilroyMedium.ttf) format("truetype");
        }


        body{
            background-color: #140675;
        }
        
    </style>

</head>

<body> 
    <div class="stars"></div>

    <div class="headerlgrel-gergre ">
        <div class="size-prodsa" style="max-width:100%">
            
            <div class="header-main-lgpw">

              
                <div class="klslsl">            
                    <a href="#">
                        <div class="logo-lgw">
                            
                            <img src="images/icons/logo-red-2.png">
                            <h1 style="color:black"> <span>The Ristow</span> <span>Gifts</span></h1>
                        </div>   
                    </a>
                </div>   

                <div class="menu-flds">
                <div class="desktop-links"> 
                        <a href="#hero-section">Дома</a>
                        <a href="#way-to-buy">Процесот</a> 
                        <a href="#why-to-buy">Причина</a>
                        <a href="#about-us">За нас</a>
                        <a href="#find-a-star">Најди ѕвезда</a>
                    </div>
             
                    <a href="buyastar.php"><div class="lfkmgw">Подари ѕвезда</div></a>

                </div>
            
            </div>

        </div>
    </div>
 


    <div class="buy-a-star-beg-gew">

        <div class="left-lpfwe">

            <div class="left-lpfwe--inside">

                <div class="gewlmge-gegw">
                    <h1>Регистрирај ја својата sвезда веднаш</h1>
                    <p>Само неколку чекори ве одделуваат од усреќување на вашата омилена личност</p>
                </div>

                <div class="steps-gelwpgwe">
                    
                    <div class="line-plfew">
                        <div></div>
                    </div>

                    <div class="steps-load-flepwg">
                        <div class="step-glewgw passedstep" id="step-1">
                            <span>1</span>
                        </div>
                        <div class="step-glewgw" id="step-2">
                            <span>2</span>
                        </div>
                        <div class="step-glewgw" id="step-3">
                            <span>3</span>
                        </div>
                    </div>

                </div>

                <div class="load-inputs-here-be" id="first-section-lod">

                    <div class="inogpew">
                        <label>Име на ѕвездата</label>
                        <div style="display: flex;">
                            <input type="text" placeholder="Стефчо & Кика" id="star_name">
                        </div>
                    </div>

                    
                    <div class="inogpew">
                        <label>Опис на ѕвездата</label>
                        <div style="display: flex;">
                            <input type="text" placeholder="Твоите очи се како оваа ѕвезда.. те сакам" id="star_desc">
                        </div>
                    </div>

                </div>

                <div class="load-inputs-here-be"  style="display: none;" id="sec-step-2"> 
                    <div class="lfwpekgwe">
                        <label>Избери ѕвезда</label>
                        <p>Со движења низ мапата можете да ја изберете ѕвездата која што најмногу ви се допаѓа.</p>
                    </div>

                    <link rel="stylesheet" href="https://aladin.u-strasbg.fr/AladinLite/api/v2/latest/aladin.min.css" />
                        
                        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.1.min.js" charset="utf-8"></script>


                        <div class="i-dmdlepwe">
                            <div id="aladin-lite-div" style="width:100%;height:90%;"></div>
                        </div>
                        <script type="text/javascript" src="https://aladin.u-strasbg.fr/AladinLite/api/v2/latest/aladin.min.js" charset="utf-8"></script>
                        <script type="text/javascript"> 

                            // var aladin = A.aladin('#aladin-lite-div', {survey: "P/DSS2/color", fov:60, target:'08 02 44.927 -48 46 19.65', zoom:2, cooFrame:"ICRS"});
   
                        </script>
                </div>

                

                <div class="load-inputs-here-be" style="display: none;" id="sec-3-delivery">
                    <div class="delivery-info">
                        <h2>Податоци за достава</h2>
                    </div>
                    
                    <div class="info-alert">
                        <span></span>
                    </div>

                    <div class="inogpew">
                        <label>Име и презиме</label>
                        <div style="display: flex;">
                            <input type="text" placeholder="Кристијан Тодоров" id="delivery_fname">
                        </div>
                    </div>

                    
                    <div class="inogpew">
                        <label>Град</label>
                        <div style="display: flex;">
                            <input type="text" placeholder="Прилеп" id="delivery_city">
                        </div>
                    </div>

                    <div class="inogpew">
                        <label>Тел. број</label>
                        <div style="display: flex;">
                            <input type="text" placeholder="075 453 322" id="delivery_phone_number">
                        </div>
                    </div>

                    <div class="inogpew">
                        <label>Е-Мајл Адреса</label>
                        <div style="display: flex;">
                            <input type="text" placeholder="info@kupidzvezda.com" id="delivery_email_address">
                        </div>
                    </div>
                    
                    <div class="inogpew">
                        <label>Адреса за достава</label>
                        <div style="display: flex;">
                            <input type="text" placeholder="Христо Татарчев 345/3" id="delivery_address">
                        </div>
                    </div>

                    <div class="prices-delivety-finally-dlfa">
                        <div class="single-price-fwe">
                            <label>Цена за достава:</label>
                            <span>0 ден.</span>
                        </div>
                        <div class="single-price-fwe">
                            <label>Вкупна цена:</label>
                            <span>199 ден.</span>
                        </div>
                    </div>

                </div>


                <div class="two-buttonss">
                    <div class="button-heere-lglepw" style="display: none;" id="back-btn-b">
                        <a href="#">
                            <div class="bpber-pbrep not-allowed-next">
                                <span>Назад</span>
                            </div>
                        </a>
                    </div>
                    <div class="button-heere-lglepw " id="next-btn">
                        <a href="#">
                            <div class="bpber-pbrep not-allowed-next">
                                <span>Продолжи</span>
                            </div>
                        </a>
                    </div>

                    
                    <div class="button-heere-lglepw " id="order-btn" style="display:none">
                        <a href="#">
                            <div class="bpber-pbrep not-allowed-next">
                                <span>Нарачај</span>
                            </div>
                        </a>
                    </div>
                </div>


                 


            </div>


            <div class="success-order-ministre" style="display:none">

                <div class="sccorrr-sdd">

                    <h1>Упсешна нарачка!</h1>

                    <img src="images/icons/success.png">

                    <p>Вашата ѕвездичка за кратко ќе си го добие својот заслужен сертификат!  </p>
                    
                    <div class="button-heere-lglepw ">
                        <a href="index.php">
                            <div class="bpber-pbrep not-allowed-next">
                                <span>Во ред</span>
                            </div>
                        </a>
                    </div>
                </div>

            </div>






        </div>

        <div class="right-rherher">

            <div class="gkergerm">
                <div id="container">
                    <span id="text1"></span>
                    <span id="text2"></span>
                </div>
                
                <svg id="filters">
                    <defs>
                        <filter id="threshold">
                            <feColorMatrix in="SourceGraphic" type="matrix" values="1 0 0 0 0
                                  0 1 0 0 0
                                  0 0 1 0 0
                                  0 0 0 255 -140" />
                        </filter>
                    </defs>
                </svg>
            </div>
        </div>

        <!-- <div class="size-prodsa">
            
            <div class="buy-a-star-beg-gew-dpd">

                <h1>Неколку чекори те делат до усреќувањето на твојата ѕвездичка.</h1>
                <p>Со мала постапка во следните чекори ќе внесете информации за доставата, ќе одберете ѕвездичка.. марко смисли јак текстСо мала постапка во следните чекори ќе внесете информации за доставата, ќе одберете ѕвездичка.. марко смисли јак текст</p>
                <div class="start-bgmwe">
                    <a href="#">
                        <div class="start-gewpgw">
                            <span>Започни тука</span>
                        </div>
                    </a>
                </div>

            </div>

        </div> -->

    </div>

    <script src="scripts/main.js"></script>

     
    
</body>