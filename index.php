<?php
  header('Content-Type: text/html; charset=utf-8')
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Установка дверей межкомнатных и входных</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- load my style -->
    <link rel="stylesheet" type="text/css" href="./css/index.css">

    <!-- load jquery 2.1.0 -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- load yandex map -->
    <script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- My script  -->
    <script type="text/javascript" src="./javascript/pixel-perfect.js"></script>
    <script type="text/javascript" src="./javascript/cookie.js"></script>
    <script type="text/javascript" src="./javascript/carousel.js"></script>
    <script type="text/javascript" src="./javascript/former-simple.js"></script>
    <script type="text/javascript" src="./javascript/doors.js"></script>
    <!-- Google analitics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-55039234-1', 'auto');
      ga('send', 'pageview');
    </script>
    <!-- Google analitics  -->
  </head>
<body class="modal-hide">
  <header id="section-main">
    <div class="container">
      <div class="col-xs-3">
        <div class="image">
          <img src="./image/logo.svg">
        </div>
      </div>
      <div class="col-xs-5">
        <nav>
          <a href="#section-work" class="scroll">Как мы работаем</a>
          <a href="#section-price" class="scroll">Цены</a>
          <a href="#section-reviews" class="scroll">Отзывы о нас</a>
        </nav>
      </div>
      <div class="col-xs-4">
        <div class="wrapper-contact">
          <div class="phone">+7 (343) 266 45 10</div>
          <a href="#"
           class="button"
           data-toggle="modal"
           data-target="#popup">
            Заказать обратный звонок
          </a>
        </div>

        <!-- Modal -->
        <div class="modal fade"
             id="popup"
             tabindex="-1"
             role="dialog"
             aria-labelledby="myModalLabel"
             aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Заказать обраный звонок</h4>
              </div>
              <div class="modal-body">
              <!-- FORM -->
                <div class="form">
                  <form action="mailer.php"
                        method="post"
                        data-metrika-goal="headerform">
                  <input name="order[форма]"
                         value="Акция"
                        type="hidden"/>
                    <div class="cont">
                      <!-- <p>Мы перезвоним в течении 1 минуты</p> -->
                      <div class="fields">
                        <div class="form-group">
                          <input type="text"
                                 class="text"
                                 name="order[имя]"
                                 placeholder="Ваше имя"
                                 data-required="true"
                                 data-name="Имя"
                                 />
                          <div class="error"></div>
                        </div>
                        <div class="form-group">
                          <input type="text"
                                 class="text"
                                 name="order[телефон]"
                                 placeholder="Контактный телефон"
                                 data-required="true"
                                 data-name="Телефон"
                                />
                          <div class="error"></div>
                        </div>
                      </div>
                      <div class="buttons form-group">
                        <input type="submit"
                               class="submit button"
                               value="Позвонить мне!" />
                      </div>
                      <div class="clearfix"></div>
                    </div>

                    <div class="loader">
                      <div class="spiner"></div>
                      <div>Отправка формы</div>
                    </div>
                    <div class="success">
                      <div class="head">Спасибо,<br /> Ваша заявка отправлена</div>
                      <div class="txt">В ближайшее время мы свяжемся с вами</div>
                    </div>
                  </form>
                </div>
              <!-- END FORM -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Modal -->
      </div>
    </div>
  </header>

  <a href="#section-main" class="arrow-up scroll"></a>

  <section class="hero" id="section-hero">
    <div class="wrapper-hero">
      <div class="container">
        <div class="col-xs-4">
          <div class="image">
            <img src="./image/hero-element.png">
          </div>
        </div>
        <div class="col-xs-8">
          <div class="wrapper">
            <h1>Установка дверей
            <b>межкомнатных и входных</b>
            <span>в Екатеринбурге!</span></h1>
            <!-- Form -->
            <div class="form">
              <form action="mailer.php"
                    method="post"
                    data-metrika-goal="mainform">
              <input name="order[форма]"
                     value="Акция"
                     type="hidden"/>
                <div class="cont">
                  <h1>Оставьте заявку на<br /> установку дверей</h1>
                  <p>Мы перезвоним в течении 1 минуты</p>
                  <div class="fields">
                    <div class="form-group">
                      <input type="text"
                             class="text"
                             name="order[имя]"
                             placeholder="Ваше имя"
                             data-required="true"
                             data-name="Имя"
                             />
                      <div class="error"></div>
                    </div>
                    <div class="form-group">
                      <input type="text"
                             class="text"
                             name="order[телефон]"
                             placeholder="Контактный телефон"
                             data-required="true"
                             data-name="Телефон"
                            />
                      <div class="error"></div>
                    </div>
                  </div>
                  <div class="buttons form-group">
                    <input type="submit"
                           class="submit button"
                           value="Позвонить мне!" />
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="loader">
                  <div class="spiner"></div>
                  <div>Отправка формы</div>
                </div>
                <div class="success">
                  <div class="head">Спасибо,<br /> Ваша заявка отправлена</div>
                  <div class="txt">В ближайшее время мы свяжемся с вами</div>
                </div>
              </form>
            </div>
            <!-- End Form -->
            <div class="lists">
              <ul>
                <li>Вы экономите<br /> до 3 000 рублей.</li>
                <li>Без очередей.</li>
              </ul>
              <img src="./image/arrow-right.png">
            </div>
            <a href="#scroll-eggs" class="scroll">
              <div class="note">
                <p class="desc">А так же</p>
                <img src="./image/arrow-down.png">
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <!-- Hero-Eggs -->
    <div class="container">
      <div class="wrapper-eggs" id="scroll-eggs">
        <div class="col-xs-2 wrapper-egg">
          <div class="egg">
            <img src="./image/hero-egg-01.png">
            <p class="desc">Демонтаж <br />старой двери</p>
          </div>
        </div>
        <div class="col-xs-2 wrapper-egg">
          <div class="egg">
            <img src="./image/hero-egg-02.png">
            <p class="desc">Расширение <br />и сужение проёмов</p>
          </div>
        </div>
        <div class="col-xs-2 wrapper-egg">
          <div class="egg">
            <img src="./image/hero-egg-03.png">
            <p class="desc">Установка <br />замков</p>
          </div>
        </div>
        <div class="col-xs-2 wrapper-egg">
          <div class="egg">
            <img src="./image/hero-egg-04.png">
            <p class="desc">Установка <br />доборов</p>
          </div>
        </div>
        <div class="col-xs-2 wrapper-egg">
          <div class="egg">
            <img src="./image/hero-egg-05.png">
            <p class="desc">Вывоз мусора</p>
          </div>
        </div>
      </div>
    </div>
    <!-- end Hero-Eggs -->
  </section>

  <section class="eggs" id="section-eggs">
    <div class="container">
      <div class="col-xs-12 col-md-offset-2 col-md-10"><h1>Почему выбирают нас</h1></div>
    </div>

    <div class="container egg" id="egg-style-1">
      <div class="col-md-3 col-xs-4">
        <div class="image">
          <img src="./image/egg-01.png">
        </div>
      </div>
      <div class="col-md-6 col-xs-7">
        <div class="desc">
          <h2>Скорость</h2>
          <p class="text">Без очередей. Мастер установит ваши двери в день обращения.</p>
        </div>
      </div>
    </div>

    <div class="container egg" id="egg-style-2">
      <div class="col-md-3 col-xs-4">
        <div class="image">
          <img src="./image/egg-02.png">
        </div>
      </div>
      <div class="col-md-6 col-xs-7">
        <div class="desc">
          <h2>Качество</h2>
          <p class="text">У нас работают только профессиональные мастера
с опытом работы более 5 лет.<br />
100 %-ая гарантия качества работ или возврат денег.</p>
        </div>
      </div>
    </div>
    <div class="container egg" id="egg-style-3">
      <div class="col-md-3 col-xs-4">
        <div class="image">
          <img src="./image/egg-03.png">
        </div>
      </div>
      <div class="col-md-6 col-xs-7">
        <div class="desc">
          <h2>Стоимость</h2>
          <p class="text">Экономия до 3000 руб. в сравнении с ценами на установку в салонах дверей.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="price" id="section-price">
    <div class="container">
      <div class="col-lg-offset-1 col-lg-9 col-xs-12">
        <h1>Цены на установку дверей</h1>
      </div>
      <div class="col-xs-offset-1 col-xs-9">
        <div class="wrapper-table">
          <table class="table">
            <thead>
              <tr>
                <th colspan="2">Межкомнатные двери</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="first">Монтаж одностворчатой двери</td>
                <td class="second"><span>от 1200 руб.</span></td>
              </tr>
              <tr>
                <td class="first">Монтаж двустворчатой двери</td>
                <td class="second"><span>2300 руб.</span></td>
              </tr>
              <tr>
                <td class="first">Монтаж сборной арки</td>
                <td class="second"><span>2300 руб.</span></td>
              </tr>
              <tr>
                <td class="first">Монтаж откосов</td>
                <td class="second"><span>от 1300 руб.</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="col-xs-offset-1 col-xs-9">
        <div class="wrapper-table last">
          <table class="table">
            <thead>
              <tr>
                <th colspan="2">А так же дополнительные услуги</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="first">Установка добора (расширителя)</td>
                <td class="second"><span>500 руб.</span></td>
              </tr>
              <tr>
                <td class="first">Врезка замка</td>
                <td class="second"><span>500 руб.</span></td>
              </tr>
              <tr>
                <td class="first">Демонтаж двери</td>
                <td class="second"><span>200 руб.</span></td>
              </tr>
              <tr>
                <td class="first">Расширение проёма</td>
                <td class="second"><span>от 400 руб.</span></td>
              </tr>
              <tr>
                <td class="first">Сужение проёма</td>
                <td class="second"><span>от 200 руб.</span></td>
              </tr>
              <tr>
                <td class="first">Вынос мусора</td>
                <td class="second"><span>300 руб.</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-lg-offset-3 col-lg-4 col-md-offset-2 col-md-5 col-xs-offset-1 col-xs-7">
          <a href="#"
           class="button"
           data-toggle="modal"
           data-target="#popup-price-1">
           Узнать полный перечень услуг
          </a>
        </div>

        <!-- Modal -->
        <div class="modal fade"
            id="popup-price-1"
            tabindex="-1"
            role="dialog"
            aria-labelledby="myModalLabel"
            aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Оставьте заявку, чтобы<br /> узнать полный перечень услуг</h4>
              </div>
              <div class="modal-body">
              <!-- Form -->
                <div class="form">
                  <form action="mailer.php"
                        method="post"
                        data-metrika-goal="price1form">
                  <input name="order[форма]"
                         value="Акция"
                         type="hidden"/>

                    <div class="cont">
                      <p>Мы перезвоним в течении 1 минуты</p>
                      <div class="fields">
                        <div class="form-group">
                          <input type="text"
                                 class="text"
                                 name="order[имя]"
                                 placeholder="Ваше имя"
                                 data-required="true"
                                 data-name="Имя"
                                 />
                          <div class="error"></div>
                        </div>
                        <div class="form-group">
                          <input type="text"
                                 class="text"
                                 name="order[телефон]"
                                 placeholder="Контактный телефон"
                                 data-required="true"
                                 data-name="Телефон"
                                />
                          <div class="error"></div>
                        </div>
                      </div>
                      <div class="buttons form-group">
                        <input type="submit"
                               class="submit button"
                               value="Позвонить мне!" />
                      </div>
                      <div class="clearfix"></div>
                    </div>

                    <div class="loader">
                      <div class="spiner"></div>
                      <div>Отправка формы</div>
                    </div>
                    <div class="success">
                      <div class="head">Спасибо,<br /> Ваша заявка отправлена</div>
                      <div class="txt">В ближайшее время мы свяжемся с вами</div>
                    </div>
                  </form>
                </div>
                <!-- end Form -->
              </div>
            </div>
          </div>
        </div>
      <!-- end Modal -->
      </div>
    </div>
  </section>

  <section class="price gray" id="section-price-gray">
    <div class="container">
      <div class="col-xs-offset-1 col-xs-9">
        <div class="wrapper-table last">
          <table class="table">
            <thead>
              <tr>
                <th colspan="2">Акция на установку дверей</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="first">Установка 2-х дверей</td>
                <td class="second"><span>скидка 10%</span></td>
              </tr>
              <tr>
                <td class="first">Установка 3-4 дверей</td>
                <td class="second"><span>скидка 15%</span></td>
              </tr>
              <tr>
                <td class="first">Установка 5-ти дверей и более</td>
                <td class="second"><span>скидка 20%</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="clearfix"></div>
       <div class="col-lg-offset-3 col-lg-4 col-md-offset-2 col-md-5 col-xs-offset-1 col-xs-7">
        <a href="#"
         class="button"
         data-toggle="modal"
         data-target="#popup-price-2">
         Узнать полный перечень услуг
        </a>
      </div>

        <!-- Modal -->
        <div class="modal fade"
             id="popup-price-2"
             tabindex="-1"
             role="dialog"
             aria-labelledby="myModalLabel"
             aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Оставьте заявку, чтобы<br /> узнать полный перечень услуг</h4>
              </div>
              <div class="modal-body">
                <div class="form">
                  <form action="mailer.php"
                        method="post"
                        data-metrika-goal="price2form">
                  <input name="order[форма]"
                         value="Акция"
                         type="hidden"/>

                    <div class="cont">
                      <p>Мы перезвоним в течении 1 минуты</p>
                      <div class="fields">
                        <div class="form-group">
                          <input type="text"
                                 class="text"
                                 name="order[имя]"
                                 placeholder="Ваше имя"
                                 data-required="true"
                                 data-name="Имя"
                                 />
                          <div class="error"></div>
                        </div>
                        <div class="form-group">
                          <input type="text"
                                 class="text"
                                 name="order[телефон]"
                                 placeholder="Контактный телефон"
                                 data-required="true"
                                 data-name="Телефон"
                                />
                          <div class="error"></div>
                        </div>
                      </div>
                      <div class="buttons form-group">
                        <input type="submit" class="submit button" value="Позвонить мне!" />
                      </div>
                      <div class="clearfix"></div>
                    </div>

                    <div class="loader">
                      <div class="spiner"></div>
                      <div>Отправка формы</div>
                    </div>
                    <div class="success">
                      <div class="head">Спасибо,<br /> Ваша заявка отправлена</div>
                      <div class="txt">В ближайшее время мы свяжемся с вами</div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      <div class="col-xs-offset-1 col-xs-9">
        <div class="wrapper-table">
          <table class="table">
            <thead>
              <tr>
                <th colspan="2">Входные двери</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="first">Монтаж металлической двери</td>
                <td class="second"><span>от 1500 руб.</span></td>
              </tr>
              <tr>
                <td class="first">Демонтаж металлической двери</td>
                <td class="second"><span>300  руб.</span></td>
              </tr>
              <tr>
                <td class="first">Демонтаж заливной металлической рамы</td>
                <td class="second"><span>2000 руб.</span></td>
              </tr>
              <tr>
                <td class="first">Расширение проёма (кирпич, гипс)</td>
                <td class="second"><span>от 500  руб.</span></td>
              </tr>
              <tr>
                <td class="first">Расширение проёма (бетон, монолит)</td>
                <td class="second"><span>от 530  руб.</span></td>
              </tr>
              <tr>
                <td class="first">Распил наличника</td>
                <td class="second"><span>от 50 руб.</span></td>
              </tr>
              <tr>
                <td class="first">Установка доводчика</td>
                <td class="second"><span>от 500  руб.</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>


    </div>
  </section>

  <section class="work" id="section-work">
    <div class="container">

      <div class="col-lg-offset-2 col-lg-8 col-xs-offset-1 col-xs-11"><h1>Как мы работаем</h1></div>

      <div class="col-lg-3 col-md-2 col-xs-6 wrapper-work-egg">
          <div class="image">
              <img src="./image/work-egg-01.png">
          </div>
          <div class="desc">Вы оставляете заявку<br /> на сайте</div>
          <div class="image-arrow"></div>
      </div>
      <div class="col-lg-3 col-md-2 col-xs-6 wrapper-work-egg">
          <div class="image">
              <img src="./image/work-egg-02.png">
          </div>
          <div class="desc">Мы перезваниваем<br /> в течение 1 минуты</div>
          <div class="image-arrow"></div>
      </div>
      <div class="col-lg-3 col-md-2 col-xs-6 wrapper-work-egg">
          <div class="image">
              <img src="./image/work-egg-03.png">
          </div>
          <div class="desc">Наш мастер приезжает<br /> через 1 час</div>
          <div class="image-arrow"></div>
      </div>
      <div class="col-lg-3 col-md-2 col-xs-6 wrapper-work-egg">
          <div class="image">
              <img src="./image/work-egg-04.png">
          </div>
          <div class="desc">Двери установлены<br />в течение 1 дня.<br />
Вы довольны</div>
      </div>
    </div>
  </section>

  <section class="reviews" id="section-reviews">
    <div class="container">

      <div class="col-lg-offset-1 col-lg-9 col-xs-10 col-xs-offset-1 ">
        <h1>Отзывы о нашей работе</h1>
      </div>
      <div class="clearfix"></div>
      <div class="col-lg-9 col-lg-offset-1 col-xs-offset-1 col-xs-10">
        <div id="carousel-example-generic" class="carousel slide" data-pause="true">

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <div class="carousel-caption">
                <div class="image">
                  <img src="./image/reviews-01.jpg">
                </div>
                <div class="desc">
                  <p>Среди большого количества предложений, отобрал, на мой взгляд, пару более компетентных компаний. Оставил им заявки, первым отреагировали «Билдер», с ними и начал работать. Все предметно обсудили, и в тот же день дверь уже была установлена. Результатом доволен, теперь советую знакомым.
                  </p>
                </div>
                <div class="autor">Михаил, предприниматель</div>
              </div>
            </div>
            <div class="item">
              <div class="carousel-caption">
                <div class="image">
                  <img src="./image/reviews-02.jpg">
                </div>
                <div class="desc">
                  <p>Мы делали срочный предпродажный ремонт в квартире, и сроки для нас были очень важны. Двери установили очень качественно, без проблем и переделок. Отличный вариант для тех, кому нужно установить двери быстро и по приемлемой цене, да и вообще хорошая фирма.</p>
                </div>
                <div class="autor">Максим, риэлтор</div>
                </div>
            </div>
            <div class="item">
              <div class="carousel-caption">
                <div class="image">
                  <img src="./image/reviews-03.jpg">
                </div>
                <div class="desc">
                  <p>Не было времени искать тех, кто поставит мне двери, решила найти мастера через интернет. Высыпалось КУЧА предложений, посмотрела на отзывы — позвонила и НИ ЧУТОЧКИ не прогадала! Заменили все двери в 4-х комнатной квартире, со скидками получилась очень хорошая экономия. Теперь советую всем моим подругам.</p>
                </div>
                <div class="autor">Светлана, руководитель</div>
                </div>
            </div>
           <div class="item">
              <div class="carousel-caption">
                <div class="image">
                  <img src="./image/reviews-04.jpg">
                </div>
                <div class="desc">
                  <p>В свой загородный дом я решила поставить новые двери. Дошло дело до установки, но муж постоянно был занят. Попробовала поработать с несколькими компаниями: одни обсчитали, других ждала весь день. Обратилась в «Билдер» — в тот же день приехал приятный молодой человек, который сделал мне все, как я хотела. Никаких ошибок в установке муж не нашел (сам строитель).</p>
                </div>
                <div class="autor">Ирина, педагог</div>
                </div>
            </div>

          </div>

          <!-- Controls -->
          <div class="links">
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            </a>
          </div>
          <div class="links">
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            </a>
          </div>
        </div>
      </div>














<!--       <div class="col-lg-9 col-lg-offset-1 col-xs-offset-1 col-xs-10 carusel">
        <div class="links">
          <a href="#" class="arrow left"></a>
        </div>

        <div class="viewport">
          <div class="wrapper">
            <div class="item">
              <div class="image">
                <img src="./image/reviews-01.jpg">
              </div>
              <div class="desc">
                <p>Среди большого количества предложений, отобрал, на мой взгляд, пару более компетентных компаний. Оставил им заявки, первым отреагировали «Билдер», с ними и начал работать. Все предметно обсудили, и в тот же день дверь уже была установлена. Результатом доволен, теперь советую знакомым.</p>
              </div>
              <div class="autor">Михаил, предприниматель</div>
            </div>
            <div class="item">
              <div class="image">
                <img src="./image/reviews-02.jpg">
              </div>
              <div class="desc">
                <p>Мы делали срочный предпродажный ремонт в квартире, и сроки для нас были очень важны. Двери установили очень качественно, без проблем и переделок. Отличный вариант для тех, кому нужно установить двери быстро и по приемлемой цене, да и вообще хорошая фирма.</p>
              </div>
              <div class="autor">Максим, риэлтор</div>
            </div>
            <div class="item">
              <div class="image">
                <img src="./image/reviews-03.jpg">
              </div>
              <div class="desc">
                <p>Не было времени искать тех, кто поставит мне двери, решила найти мастера через интернет. Высыпалось КУЧА предложений, посмотрела на отзывы — позвонила и НИ ЧУТОЧКИ не прогадала! Заменили все двери в 4-х комнатной квартире, со скидками получилась очень хорошая экономия. Теперь советую всем моим подругам.</p>
              </div>
              <div class="autor">Светлана, руководитель</div>
            </div>
            <div class="item">
              <div class="image">
                <img src="./image/reviews-04.jpg">
              </div>
              <div class="desc">
                <p>В свой загородный дом я решила поставить новые двери. Дошло дело до установки, но муж постоянно был занят. Попробовала поработать с несколькими компаниями: одни обсчитали, других ждала весь день. Обратилась в «Билдер» — в тот же день приехал приятный молодой человек, который сделал мне все, как я хотела. Никаких ошибок в установке муж не нашел (сам строитель).</p>
              </div>
              <div class="autor">Ирина, педагог</div>
            </div>
          </div>
        </div>

        <div class="links">
          <a href="#" class="arrow right"></a>
        </div>
      </div> -->

    </div>
  </section>

  <section class="block-map" id="section-block-map">
    <div class="container">
      <div class="col-xs-6">
          <div id="map"></div>
      </div>
      <div class="col-xs-offset-1 col-xs-4">
        <div class="wrapper">
          <div class="form">
            <form action="mailer.php"
                  method="post"
                  data-metrika-goal="mapform">
            <input name="order[форма]"
                   value="Акция"
                   type="hidden"/>

              <div class="cont">
                <h1>Оставьте заявку на<br /> установку дверей</h1>
                <p>Мы перезвоним в течении 1 минуты</p>
                <div class="fields">
                  <div class="form-group">
                    <input type="text"
                           class="text"
                           name="order[имя]"
                           placeholder="Ваше имя"
                           data-required="true"
                           data-name="Имя"
                           />
                    <div class="error"></div>
                  </div>
                  <div class="form-group">
                    <input type="text"
                           class="text"
                           name="order[телефон]"
                           placeholder="Контактный телефон"
                           data-required="true"
                           data-name="Телефон"
                          />
                    <div class="error"></div>
                  </div>
                </div>
                <div class="buttons form-group">
                  <input type="submit"
                         class="submit button"
                         value="Позвонить мне!" />
                </div>
                <div class="clearfix"></div>
              </div>

              <div class="loader">
                <div class="spiner"></div>
                <div>Отправка формы</div>
              </div>
              <div class="success">
                <div class="head">Спасибо,<br /> Ваша заявка отправлена</div>
                <div class="txt">В ближайшее время мы свяжемся с вами</div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="col-xs-3">
        <div class="image">
          <img src="./image/logo.svg">
        </div>
      </div>
      <div class="col-xs-5">
        <nav>
          <a href="#section-work" class="scroll">Как мы работаем</a>
          <a href="#section-price" class="scroll">Цены</a>
          <a href="#section-reviews" class="scroll">Отзывы о нас</a>
        </nav>
      </div>
      <div class="col-xs-4">
        <div class="wrapper-contact">
          <div class="phone">+7 (343) 266 45 10</div>
          <a href="#"
           class="button"
           data-toggle="modal"
           data-target="#popup-footer">
            Заказать обратный звонок
          </a>
        </div>

        <!-- Modal -->
        <div class="modal fade"
             id="popup-footer"
             tabindex="-1"
             role="dialog"
             aria-labelledby="myModalLabel"
             aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Заказать обраный звонок</h4>
              </div>
              <div class="modal-body">
                <div class="form">
                  <form action="mailer.php"
                        method="post"
                        data-metrika-goal="footerform">
                  <input name="order[форма]"
                         value="Акция"
                         type="hidden"/>

                    <div class="cont">
                      <!-- <p>Мы перезвоним в течении 1 минуты</p> -->
                      <div class="fields">
                        <div class="form-group">
                          <input type="text"
                                 class="text"
                                 name="order[имя]"
                                 placeholder="Ваше имя"
                                 data-required="true"
                                 data-name="Имя"
                                 />
                          <div class="error"></div>
                        </div>
                        <div class="form-group">
                          <input type="text"
                                 class="text"
                                 name="order[телефон]"
                                 placeholder="Контактный телефон"
                                 data-required="true"
                                 data-name="Телефон"
                                />
                          <div class="error"></div>
                        </div>
                      </div>
                      <div class="buttons form-group">
                        <input type="submit"
                               class="submit button"
                               value="Позвонить мне!" />
                      </div>
                      <div class="clearfix"></div>
                    </div>

                    <div class="loader">
                      <div class="spiner"></div>
                      <div>Отправка формы</div>
                    </div>
                    <div class="success">
                      <div class="head">Спасибо,<br /> Ваша заявка отправлена</div>
                      <div class="txt">В ближайшее время мы свяжемся с вами</div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- end modal -->

      </div>
    </div>
  </footer>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter26199870 = new Ya.Metrika({id:26199870,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/26199870" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>























