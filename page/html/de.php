<?php

# page settings
$language = 'de';
$title = 'Digitales Portfolio';
$description = 'Digitales Portfolio von Michel Abele, Fachinformatiker und Speditionskaufmann aus Hohenwarsleben.';

# navbar
$navbar = [
    'start' => 'Start',
    'about' => 'Über mich',
    'certificates' => 'Zertifikate',
    'skills' => 'Fähigkeiten',
    'resume' => 'Lebenslauf',
    'github' => 'GitHub-Repositories',
    'websites' => 'Webseiten',
    'games' => 'Game-Server',
    'contact' => 'Kontakt'
];

# typed
$typed = [
    'Windows-Administrator',
    'Linux-Administrator',
    'Netzwerkadministrator',
    'Full-Stack-Webentwickler',
    'Speditionskaufmann',
    'Lkw-Disponent',
    'Lkw-Fahrer',
    'Heimatforscher'
];

# age
$birthDate = "1980-02-03";
$currentDate = date("Y-m-d");
$age = date_diff(date_create($birthDate), date_create($currentDate))->y;

ob_start();
?>

        <section id="about">
            <div class="container">
                <header>
                    <h2>Über mich</h2>
                    <p class="mb-2 justify">Als ausgebildeter Informatiker und Speditionskaufmann schlägt mein Herz gleichermaßen für beide Berufe. Die Verbindung zwischen diesen scheinbar unterschiedlichen Bereichen fasziniert mich, da sie Gemeinsamkeiten aufweisen, die oft übersehen werden.</p>
                    <p class="mb-2 justify">In beiden Berufen steht der reibungslose Transport im Mittelpunkt. Als Informatiker sorge ich dafür, dass Daten sicher und effizient von einem Punkt zum anderen gelangen. In ähnlicher Weise kümmere ich mich als Speditionskaufmann darum, dass Waren termingerecht und unversehrt an ihr Ziel kommen.</p>
                    <p class="mb-2 justify">Sowohl bei der Datenübertragung als auch beim Warentransport ist eine präzise Planung und Organisation unerlässlich. In der Informatik wie auch in der Spedition ist die Optimierung von Prozessen entscheidend, um einen reibungslosen Ablauf zu gewährleisten.</p>
                    <p class="justify">Die Parallelen zwischen diesen beiden Berufen haben mir gezeigt, wie vielseitig und vernetzt die Welt der Technologie und Logistik ist. Diese Erkenntnis treibt mich an, stets nach innovativen Lösungen zu suchen, die sowohl im digitalen als auch im physischen Raum echten Mehrwert schaffen.</p>
                </header>

                <div class="pt-4 pt-lg-0 content">
                    <div data-aos="fade-left">
                        <h3>Informatiker &amp; Speditionskaufmann.</h3>
                        <p class="fst-italic justify">Ich besitze einen Berufsabschluss als <strong>Fachinformatiker Systemintegration</strong> und einen als <strong>Kaufmann für Spedition und Logistikdienstleistung</strong>.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Alter:</strong> <span><?= $age ?></span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Telefon:</strong> <span><a href="tel:+4915122883384">+49 (0)151 22 88 33 84</a></span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Arbeitsuchend:</strong> <span>nein</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Wohnort:</strong> <span>Hohenwarsleben, Sachsen-Anhalt</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>E-Mail:</strong> <span><a href="mailto:kontakt@michel-abele.de">kontakt@abele.onl</a></span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>nein</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up">
                        <p class="mb-2 justify">Als jemand, der hin und wieder auf der Suche nach neuen beruflichen Möglichkeiten ist, möchte ich auf meinen Verfügbarkeitsstatus für den Arbeitsmarkt hinweisen. Ich bin gleichermaßen an meinen beiden Berufen interessiert und stehe Ihnen gerne bereichsübergreifend zur Verfügung.</p>
                        <p class="mb-2 justify">Gleichzeitig bin ich auch als Freelancer tätig und suche stets nach spannenden Projekten, bei denen ich meine Fähigkeiten und Erfahrungen einbringen kann.</p>
                        <p class="justify">Wenn Sie an einer Zusammenarbeit interessiert sind oder weitere Informationen benötigen, zögern Sie nicht, mich zu kontaktieren.</p>
                    </div>
                </div>
            </div>
        </section>

    <section id="facts">
        <div class="container">
            <header>
                <h2>Fakten</h2>
                <p class="justify">In meiner beruflichen Laufbahn haben sich einige Daten angesammelt. Im Folgenden finden Sie eine kleine Auswahl genauer, gerundeter und geschätzter Werte.</p>
            </header>

            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="0">
                    <div class="count-box">
                        <p>
                            <i class="bi-before bi-before-globe-europe-africa"></i>
                            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
                            <span class="counter-unit">Länder</span><br>
                            <span class="counter-text">mehrfach beruflich besucht.</span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="count-box">
                        <p>
                            <i class="bi-before bi-before-headset"></i>
                            <span class="counter-prefix">über</span>
                            <span data-purecounter-start="0" data-purecounter-end="10000" data-purecounter-duration="1" class="purecounter"></span>
                            <span class="counter-unit">Stunden</span><br>
                            <span class="counter-text">1<sup>st</sup>-Level-Helpdesk.</span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="count-box">
                        <p>
                            <i class="bi-before bi-before-code-slash"></i>
                            <span class="counter-prefix">über</span>
                            <span data-purecounter-start="0" data-purecounter-end="200000" data-purecounter-duration="1" class="purecounter"></span>
                            <span class="counter-unit">Zeilen</span><br>
                            <span class="counter-text">geschriebener Code.</span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="count-box">
                        <p>
                            <i class="bi-before bi-before-truck"></i>
                            <span class="counter-prefix">über</span>
                            <span data-purecounter-start="0" data-purecounter-end="500000" data-purecounter-duration="1" class="purecounter"></span>
                            <span class="counter-unit">Kilometer</span><br>
                            <span class="counter-text">am Steuer eines Lkw.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="certificates">
        <div class="container">
        </div>
    </section>

    <section id="skills">
        <div class="container">
        </div>
    </section>

    <section id="resume">
        <div class="container">
        </div>
    </section>

    <section id="github">
        <div class="container">
        </div>
    </section>

    <section id="websites">
        <div class="container">
        </div>
    </section>

    <section id="games">
        <div class="container">
        </div>
    </section>

    <section id="contact">
        <div class="container">
        </div>
    </section>

<?php
$content = ob_get_contents();
ob_end_clean();
