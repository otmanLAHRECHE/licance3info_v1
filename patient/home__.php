<?php
require("../setting/connect_databes.php");
session_start();
if (isset($_SESSION["PatientId"])) {
    $PatientId = $_SESSION["PatientId"];
    $select_query = "SELECT *FROM patient WHERE id = $PatientId";
    $result_info = mysqli_query($conn, $select_query);
    $row_info = mysqli_fetch_assoc($result_info);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8-general-Ci">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOME PAGE</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body class="body_home">
        <div class="sidebarr">
            <div class="patient-info">
                <img src="person.png" alt="Patient Image">
                <h3 class="h3prs">
                    <?php echo $row_info["nom"] . " " . $row_info["prenom"]; ?>
                </h3>
            </div>
            <ul class="nav-menu">
                <li class="la_click" onclick="openCity(event, 'raiisya')">الـرئـيــســـيــــــــة</li>
                <li class="la_click" onclick="openCity(event, 'malomat')">معلومات المريض
                </li>
                <?php
                if ($row_info["status"] == 1) { // 1 means Extern patient 
                ?>
                    <li class="la_click" onclick="openCity(event, 'hajse')">حجـــــز مـــــوعد
                    </li>
                    <li class="la_click" onclick="openCity(event, 'talab')" style="display:none">طـلـــــب وثـــيقــة
                    </li>
                <?php }
                if ($row_info["status"] == 2) { // 2 means Intern patient 
                ?>
                    <li class="la_click" onclick="openCity(event, 'talab')">طـلـــــب وثـــيقــة
                    </li>
                    <li class="la_click" onclick="openCity(event, 'hajse')" style="display:none">حجـــــز مـــــوعد
                    </li>
                <?php } ?>
                <li onclick=""></li>
                <li class="la_click" onclick="openCity(event, 'tawasolbina')">اتــصــــل بـــــنـــا</li>
            </ul>

        </div>
        <div id="setWidth">
             
                <div id="raiisya" class="container lapage" style="display:none">
                    <div class="sent-docs">
                        <p><b>تم قبول موعدك</b></p>
                        <div class="sent-doc">
                            <p>التاريخ:</p><input type="date">
                            <p>الفترة:</p><input type="text">
                        </div>
                    </div>
                    <div class="sent-docs">
                        <p><b>تم ارسال الوثيقة </b></p>
                        <div class="sent-doc">
                            <img src="ord.jpg" alt="document">
                            <p>Document 1</p>
                            <button class="Telecharger">Télécharger</button>
                        </div>
                        <div class="sent-doc">
                            <img src="ord.jpg" alt="document">
                            <p>Document 2</p>
                            <button class="Telecharger">Télécharger</button>
                        </div>
                        <div class="sent-doc">
                            <img src="ord.jpg" alt="document">
                            <p>Document 3</p>
                            <button class="Telecharger">Télécharger</button>
                        </div>
                    </div>

                    <div class="sent-docs">
                        <p><b>حمية الغذاية الخاصة بك</b></p>
                        <iframe src="h" width="500" height="500"></iframe>
                    </div>
                    <div class="sent-docsy">
                        <p><b>موقع العيادة</b></p>
                        <div class="map_div"></div>
                    </div>
                </div>
             
            <div id="malomat" class="containers lapage" style="display:none">
                <main class="main">
                    <div class="scaleZOOM">
                        <h3 class="H3_Title">معلوماتك<button class="editBTN" onclick="unabling()">تعديل</button></h3>
                        <section class="section">
                            <form>
                                <div style="margin-bottom:10px ;"><label>اللقب :</label>
                                    <input type="text" class="inp" id="nom" name="nom   " disabled value="<?php echo $row_info["nom"] ?>" placeholder="لقبك">
                                </div>
                                <div style="margin-bottom:10px ;"><label>الاسم :</label>
                                    <input type="text" class="inp" id="prenom" name="prenom" disabled value="<?php echo $row_info["prenom"] ?>" placeholder="أسمك">
                                </div>
                                <div style="margin-bottom:10px ;"><label>العمر :</label>
                                    <input type="number" class="inp" id="nom" name="date" disabled value="<?php echo $row_info["date"] ?>" placeholder="عمرك">
                                </div>
                                <div style="margin-bottom:10px ;"><label>البريد الالكتروني :</label>
                                    <input type="email" class="inp" id="email" name="email" placeholder="بريدك الإكتروني" disabled value="<?php echo $row_info["email"] ?>">
                                </div>
                                <div style="margin-bottom:10px ;"><label>زمرة الدم :</label>
                                    <input type="text" class="inp" id="groupe_sanguin" name="groupe_sanguin" disabled value="<?php echo $row_info["groupe_sanguin"] ?>" placeholder="زمرة دمك">
                                </div>
                                <div style="margin-bottom:10px ;"><label>مكان الاقامة :</label>
                                    <input type="text" class="inp" id="address" name="address" disabled value="<?php echo $row_info["address"] ?>" placeholder="مكان اقامتك">
                                </div>
                                <div style="margin-bottom:10px ;"><label>رقم الهاتف :</label>
                                    <input type="text" class="inp" id="telephone" name="telephone" disabled value="<?php echo $row_info["telephone"] ?>" placeholder="مكان اقامتك">
                                </div>
                                <?php $_SESSION["PatientId"] = $PatientId ?>
                                <input class="submitB inp" id="to_popup" type="submit" value="حفظ" disabled>
                            </form>
                        </section>
                    </div>

                </main>
            </div>
            <div id="hajse" class="containers lapage" style="display:none">
                <main class="main">
                    <div class="scaleZOOM">
                        <h3 class="H3_Title">حجز موعد</h3>
                        <section class="section" id="appointment">
                            <form>

                                <div style="margin-bottom:10px ;"><label for="date">التاريخ:</label>
                                    <input type="date" class="inp" id="date" name="date">
                                </div>
                                <div class="document-type">
                                    <label class="DOCtype">الفـــــــتــرة:</label>
                                    <select name="document-type" style="width:100%;font-size:20px ;">
                                        <option value="sabah" style="font-size:20px ;">صباحا</option>
                                        <option value="massa" style="font-size:20px ;">مساءا</option>
                                    </select>
                                </div>

                                <div style="margin-bottom:10px ;"><label for="document">وثيقة :</label>
                                    <input type="file" class="inp" id="document" name="document">
                                </div>
                                <div style="margin-bottom:10px ;"><label for="document">تحاليل:</label>
                                    <input type="file" class="inp" id="document" name="document">
                                </div>
                                <input class="submitB inp" type="submit" value="حجز">
                            </form>
                        </section>
                    </div>

                </main>
            </div>
            <div id="talab" class="containers lapage" style="display:none">
                <main class="main">
                    <div class="scaleZOOM">
                        <h3 class="H3_Title">طلب وثيقة</h3>
                        <section class="section" id="documents">
                            <form>
                                <div class="document-type">
                                    <label class="DOCtype">نوع الوثيقة:</label>
                                    <select name="document-type" style="width:100%;">
                                        <option value="prescription">البروتوكول</option>
                                        <option value="lab-results"> تحاليل الدم</option>
                                        <option value="medical-records">شهادة طبية</option>
                                    </select>
                                </div>
                                <input class="submitB inp" type="submit" value="طلب">
                            </form>
                        </section>
                    </div>
                </main>
            </div>
            <div id="tawasolbina" class="containers lapage" style="display:none">
                <main class="main">
                    <div class="scaleZOOM">
                        <h3 class="H3_Title">تواصلو معنا</h3>
                        <section class="section" id="contacte">
                            <form>
                                <ul id="phoneNumbers">
                                    <li>
                                        <span class="label"> الحماية المدنية:</span>

                                        <ul class="kari">
                                            <li><a href="tel:+29228014" target="_blank">29228014</a></li>
                                            <li><a href="https://www.facebook.com/" target="_blank">فيسبوك</a></li>
                                            <li><a href="mailto:example@example.com">بريد إلكتروني</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="label">شركة النقل :</span>

                                        <ul class="kari">
                                            <li><a href="tel:+0555041817" target="_blank">0555041817</a></li>
                                            <li><a href="https://www.facebook.com/" target="_blank">فيسبوك</a></li>
                                            <li><a href="mailto:example@example.com">بريد إلكتروني</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="label">العيادة:</span>

                                        <ul class="kari">
                                            <li><a href="tel:+029223229" target="_blank">029223229</a></li>
                                            <li><a href="https://www.facebook.com/" target="_blank">فيسبوك</a></li>
                                            <li><a href="mailto:example@example.com">بريد إلكتروني</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </form>
                        </section>
                    </div>
                </main>
            </div>
        </div>
        <script>
            function openCity(evt, cityName) {
                var i, x, tablinks;
                x = document.getElementsByClassName("lapage");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("la_click");
                for (i = 0; i < x.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace("listOnClick", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " listOnClick";
            }
            const Sidebar = document.getElementsByClassName('sidebarr')[0];
            const widthOfSidebar = window.getComputedStyle(Sidebar).getPropertyValue("width");
            const divLeftM = document.getElementById("setWidth");
            divLeftM.style.marginLeft = widthOfSidebar;

            function unabling() {
                var clssArray = document.getElementsByClassName("inp");
                for (let i = 0; i < clssArray.length; i++) {
                    clssArray[i].disabled = false;

                }
            }
            // const submitToPopup = document.getElementById("to_popup");
            // submitToPopup.addEventListener("click", function (event) {
            //     event.preventDefault();
            //     const popup = document.createElement("div");
            //     popup.innerHTML =
            //         '<h3 style="color:red">هل تريد حقا تعديل معلوماتك</h3><p>اللقب: ${document.getElementById("nom").value } <br>الاسم:${document.getElementById("prenom").value}<br>العمر:${document.getElementById("nom").value}<br>البريد الالكتروني:${document.getElementById("email").value}<br>زمرة الدم:${document.getElementById("groupe_sanguin").value}<br>مكان الاقامة:${document.getElementById("address").value}<br>رقم الهاتف:${document.getElementById("telephone").value}<br><button id "confirmBTN">Submit</button></p>'
            // });
            // document.body.appendChild(popup);
            // popup.style.po
            // popup.style.
            //     popup.style.
            //     popup.style.
            //     popup.style.
            //     popup.style.
            //     popup.style.
            //     popup.style.
        </script>

    </body>

    </html>
<?php
}
?>