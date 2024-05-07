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
                <header data-aos="fade-left">
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
                    <div data-aos="fade-up-left">
                        <p class="mb-2 justify">Als jemand, der hin und wieder auf der Suche nach neuen beruflichen Möglichkeiten ist, möchte ich auf meinen Verfügbarkeitsstatus für den Arbeitsmarkt hinweisen. Ich bin gleichermaßen an meinen beiden Berufen interessiert und stehe Ihnen gerne bereichsübergreifend zur Verfügung.</p>
                        <p class="mb-2 justify">Gleichzeitig bin ich auch als Freelancer tätig und suche stets nach spannenden Projekten, bei denen ich meine Fähigkeiten und Erfahrungen einbringen kann.</p>
                        <p class="justify">Wenn Sie an einer Zusammenarbeit interessiert sind oder weitere Informationen benötigen, zögern Sie nicht, mich zu kontaktieren.</p>
                    </div>
                </div>
            </div>
        </section>

    <section id="facts">
        <div class="container">
            <header data-aos="fade-left">
                <h2>Fakten</h2>
                <p class="justify">In meiner beruflichen Laufbahn haben sich einige Daten angesammelt. Im Folgenden finden Sie eine kleine Auswahl genauer, gerundeter und geschätzter Werte.</p>
            </header>

            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="0">
                    <div class="count-box">
                        <p>
                            <i class="bi-before bi-before-box-seam"></i>
                            <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
                            <span class="counter-unit">Jahre</span><br>
                            <span class="counter-text">Berufserfahrung als Speditionskaufmann.</span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="count-box">
                        <p>
                            <i class="bi-before bi-before-globe-europe-africa"></i>
                            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
                            <span class="counter-unit">Länder</span><br>
                            <span class="counter-text">mehrfach beruflich besucht.</span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="count-box">
                        <p>
                            <i class="bi-before bi-before-pc-display-horizontal"></i>
                            <span class="counter-prefix">&gt;</span>
                            <span data-purecounter-start="0" data-purecounter-end="16" data-purecounter-duration="1" class="purecounter"></span>
                            <span class="counter-unit">Jahre</span><br>
                            <span class="counter-text">Berufserfahrung als Informatiker.</span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="count-box">
                        <p>
                            <i class="bi-before bi-before-fullscreen-exit"></i>
                            <span data-purecounter-start="0" data-purecounter-end="365" data-purecounter-duration="1" class="purecounter"></span>
                            <span class="counter-unit">Tage</span><br>
                            <span class="counter-text">NATO-Kriegsgefangenschaft in Celle und Munster.</span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="0">
                    <div class="count-box">
                        <p>
                            <i class="bi-before bi-before-gear"></i>
                            <span class="counter-prefix">&gt;</span>
                            <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>
                            <span class="counter-unit">t</span><br>
                            <span class="counter-text">verschiedenster Dinge bewegt.</span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="count-box">
                        <p>
                            <i class="bi-before bi-before-headset"></i>
                            <span class="counter-prefix">&gt;</span>
                            <span data-purecounter-start="0" data-purecounter-end="10000" data-purecounter-duration="1" class="purecounter"></span>
                            <span class="counter-unit">h</span><br>
                            <span class="counter-text">1<sup>st</sup>-Level-Helpdesk.</span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="count-box">
                        <p>
                            <i class="bi-before bi-before-code-slash"></i>
                            <span class="counter-prefix">&gt;</span>
                            <span data-purecounter-start="0" data-purecounter-end="200000" data-purecounter-duration="1" class="purecounter"></span>
                            <span class="counter-unit">Zeilen</span><br>
                            <span class="counter-text">Code verschiedener Sprachen.</span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="count-box">
                        <p>
                            <i class="bi-before bi-before-truck"></i>
                            <span class="counter-prefix">&gt;</span>
                            <span data-purecounter-start="0" data-purecounter-end="500000" data-purecounter-duration="1" class="purecounter"></span>
                            <span class="counter-unit">km</span><br>
                            <span class="counter-text">mit Lastkraftwagen verschiedener Hersteller.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="certificates">
        <div class="container">
            <header data-aos="fade-left">
                <h2>Zertifikate</h2>
                <p class="justify">Hier könnte Ihre Werbung stehen!</p>
            </header>
        </div>
    </section>

    <section id="skills" class="background">
        <div class="container">
            <header data-aos="fade-left">
                <h2>Fähigkeiten (Skill-Profil)</h2>
                <p>Ein Skill-Profil ist eine Zusammenstellung von Fähigkeiten, Erfahrungen und Qualifikationen einer Person. Es dient dazu, die Kompetenzen und Stärken einer Person zu präsentieren und potenziellen Arbeitgebern oder anderen Interessenten einen Überblick über die beruflichen Fähigkeiten zu geben.</p>
            </header>

            <div class="tab-container">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab1-1">Informatik</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab1-2">Webentwicklung</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab1-3">Logistik</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab1-4">Soziale Kompetenz</a></li>
                </ul>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab1-1">
                    <h3>Informatik</h3>
                    <div class="row skills-content">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                            <h2>Microsoft</h2>

                            <div class="progress">
                                <span class="skill">Windows <i class="val">85%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Windows Server <i class="val">70%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Microsoft 365 <i class="val">60%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Microsoft SQL Server<i class="val">25%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">PowerShell-Scripting <i class="val">55%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <h2>Linux</h2>

                            <div class="progress">
                                <span class="skill">Debian <i class="val">70%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        

                            <div class="progress">
                                <span class="skill">Ubuntu <i class="val">55%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">AlmaLinux (RHEL) <i class="val">20%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Linux-Shell-Scripting <i class="val">15%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Preseed / Kickstart <i class="val">50%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row skills-content">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                            <h2>Virtualisierung</h2>

                            <div class="progress">
                                <span class="skill">VMware ESXi / vSphere <i class="val">45%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Microsoft Hyper-V <i class="val">25%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Proxmox VE <i class="val">50%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Linux KVM / QEMU <i class="val">20%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Docker <i class="val">15%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">LXC <i class="val">15%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <h2>Fernzugriff / -wartung</h2>

                            <div class="progress">
                                <span class="skill">Teamviewer <i class="val">85%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Microsoft Remotedesktop<i class="val">60%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">AnyDesk <i class="val">50%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">VNC <i class="val">20%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">SSH Terminal <i class="val">25%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">PuTTY <i class="val">25%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row skills-content">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                            <h2>Firewalls / Router</h2>

                            <div class="progress">
                                <span class="skill">AVM Fritz!Box<i class="val">50%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Sophos SD / XG <i class="val">65%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">OPNsense <i class="val">30%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">iptables <i class="val">25%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <h2>Monitoring / Verwaltung</h2>

                            <div class="progress">
                                <span class="skill">Zabbix <i class="val">25%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Paessler PRTG <i class="val">50%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">DATTO RMM <i class="val">45%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="tab1-2">
                    <h3>Webentwicklung</h3>

                    <div class="row skills-content">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                            <h2>Frontend</h2>

                            <div class="progress">
                                <span class="skill">HTML<i class="val">80%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">CSS<i class="val">80%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Sass / SCSS<i class="val">70%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">JavaScript<i class="val">20%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <h2>Backend</h2>

                            <div class="progress">
                                <span class="skill">PHP <i class="val">60%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">MySQL / MariaDB <i class="val">35%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Apache HTTP Server <i class="val">45%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Node.js <i class="val">15%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row skills-content">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                            <h2>Libraries / Frameworks</h2>

                            <div class="progress">
                                <span class="skill">Bootstrap <i class="val">35%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">jQuery <i class="val">15%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <h2>Online-Dienste</h2>

                            <div class="progress">
                                <span class="skill">Cloudflare<i class="val">20%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">GitHub <i class="val">25%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">GitLab <i class="val">15%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Google Search Console <i class="val">65%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="tab1-3">
                    <h3>Logistik</h3>

                    <div class="row skills-content">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                            <h2>Verkehrsträger</h2>

                            <div class="progress">
                                <span class="skill">Straßengüterverkehr <i class="val">85%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Binnenschifffahrt <i class="val">25%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <h2>Frachtenbörsen</h2>

                            <div class="progress">
                                <span class="skill">TIMOCOM <i class="val">85%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">teleroute <i class="val">15%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row skills-content">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                            <h2>Dispostion</h2>

                            <div class="progress">
                                <span class="skill">Stückgut (Lkw, international) <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Agrar-Schüttgut (Lkw) <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Kurier-Express-Paket-Dienst (KEP) <i class="val">45%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Schiffsbe- / -entladung <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <h2>Verwaltung</h2>

                            <div class="progress">
                                <span class="skill">Tourenplanung <i class="val">85%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Ernteeinsatzplanung <i class="val">25%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Rechnungsstellung <i class="val">50%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Supply Chain Management (SCM) <i class="val">30%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="tab1-4">
                    <h3>Soziale Kompetenz</h3>

                    <div class="row skills-content">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                            <h2>Sprachen</h2>

                            <div class="progress">
                                <span class="skill">Deutsch <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Englisch <i class="val">45%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <h2>Betriebswirtschaftslehre</h2>

                            <div class="progress">
                                <span class="skill">Buchhaltung / Bilanzierung <i class="val">65%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Personalverwaltung <i class="val">45%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row skills-content">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                            <h2>Persönlichkeit</h2>

                            <div class="progress">
                                <span class="skill">Eigenverantwortung <i class="val">85%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Kritikfähig <i class="val">65%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Begeisterungsfähig <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Teamfähig <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <h2>Führungsfähigkeit</h2>

                            <div class="progress">
                                <span class="skill">Durchsetzungsvermögen <i class="val">85%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Überzeugungsfähigkeit <i class="val">55%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Motivationsfähigkeit <i class="val">65%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Konfliktfähigkeit <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Interkulturelle Kompetenz <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
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
