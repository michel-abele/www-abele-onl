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

    <section id="facts" class="background">
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
                <p class="justify">Ein Skill-Profil ist eine Zusammenstellung von Fähigkeiten, Erfahrungen und Qualifikationen einer Person. Es dient dazu, die Kompetenzen und Stärken einer Person zu präsentieren und potenziellen Arbeitgebern oder anderen Interessenten einen Überblick über die beruflichen Fähigkeiten zu geben.</p>
            </header>

            <div class="tab-container" data-aos="fade-left" data-aos-delay="100">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab1-1">Informatik</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab1-2">Webentwicklung</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab1-3">Logistik</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab1-4">Soziale Kompetenz</a></li>
                </ul>
            </div>

            <div class="tab-content" data-aos="fade-up" data-aos-delay="100">
                <div class="tab-pane fade show active" id="tab1-1">
                    <h3>Informatik</h3>
                    <div class="row skills-content">
                        <div class="col-lg-6">
                            <h4>Microsoft</h4>

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

                        <div class="col-lg-6">
                            <h4>Linux</h4>

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
                        <div class="col-lg-6">
                            <h4>Virtualisierung</h4>

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

                        <div class="col-lg-6">
                            <h4>Fernzugriff / -wartung</h4>

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
                        <div class="col-lg-6">
                            <h4>Firewalls / Router</h4>

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

                        <div class="col-lg-6">
                            <h4>Monitoring / Verwaltung</h4>

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
                        <div class="col-lg-6">
                            <h4>Frontend</h4>

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

                        <div class="col-lg-6">
                            <h4>Backend</h4>

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
                        <div class="col-lg-6">
                            <h4>Libraries / Frameworks</h4>

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

                        <div class="col-lg-6">
                            <h4>Online-Dienste</h4>

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
                        <div class="col-lg-6">
                            <h4>Verkehrsträger</h4>

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

                        <div class="col-lg-6">
                            <h4>Frachtenbörsen</h4>

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
                        <div class="col-lg-6">
                            <h4>Dispostion</h4>

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

                        <div class="col-lg-6">
                            <h4>Verwaltung</h4>

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
                        <div class="col-lg-6">
                            <h4>Sprachen</h4>

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

                        <div class="col-lg-6">
                            <h4>Betriebswirtschaftslehre</h4>

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
                        <div class="col-lg-6">
                            <h4>Persönlichkeit</h4>

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

                        <div class="col-lg-6">
                            <h4>Führungsfähigkeit</h4>

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

            <header data-aos="fade-left">
                <h2>Lebenslauf</h2>
                <p class="justify">Meine erste Berufsausbildung war die zum Tischler, während derer ich erstmals mit der CNC-Technik in Kontakt kam, was mein Interesse an der Informatik weckte. Nach einem Jahr Kriegsgefangenschaft in Celle/Munster absolvierte ich eine Umschulung zum Fachinformatiker und war daraufhin mehrere Jahre in Berlin tätig. Aufgrund eines Einbruchs der Systemhäuser und dem daraus resultierenden Überschuss an Informatikern auf dem Arbeitsmarkt, musste ich mich neu orientieren. Daraufhin entschied ich mich für eine Umschulung zum Speditionskaufmann und erweiterte zusätzlich meinen Führerschein auf die Klasse CE (Lkw mit Anhänger). Nach einigen Jahren in der Agrarlogistik bot sich mir die Möglichkeit, wieder in den Bereich der Informatik zu wechseln, die ich sofort ergriff.</p>
            </header>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <h3 class="resume-title">Zusammenfassung</h3>
                    <div class="resume-item pb-0">
                        <h4>Michel Abele</h4>
                        <ul>
                            <li><strong>Alter:</strong> <?= $age ?></li>
                            <li><strong>Geschlecht:</strong> männlich</li>
                            <li><strong>Wohnort:</strong> Hohenwarsleben, Sachsen-Anhalt</li>
                            <li><strong>Telefon:</strong> <a href="tel:+4915122883384">+49 (0)151 22 88 33 84</a></li>
                            <li><strong>E-Mail:</strong> <a href="mailto:kontakt@michel-abele.de">kontakt@michel-abele.de</a></li>
                        </ul>
                        <ul>
                            <li><strong>Schulabschluss:</strong> Realschulabschluss</li>
                            <li><strong>Berufsabschluss:</strong> Tischler</li>
                            <li><strong>Berufsabschluss:</strong> Informatiker</li>
                            <li><strong>Berufsabschluss:</strong> Speditionskaufmann</li>
                        </ul>
                    </div>

                    <h3 class="resume-title">Berufsausbildung</h3>
                    <div class="resume-item">
                        <h4>Kaufmann für Spedition und Logistikdienstleistung</h4>
                        <h5>2014 - 2016</h5>
                        <p><em>DEKRA Akademie GmbH, Magdeburg</em></p>
                        <p class="justify">Die Ausbildung zum Speditionskaufmann umfasst sämtliche Bereiche der Verkehrsträger, darunter Straßengüterverkehr, Frachtschiffverkehr (Binnen- und Hochseeschifffahrt), Schienengüterverkehr und Luftfrachtverkehr. Des Weiteren beinhaltet sie Themen wie Betriebswirtschaftslehre, Zollwesen, internationales Wirtschaftsrecht und Supply-Chain-Management (SCM). Darüber hinaus vermittelte die Ausbildung an der DEKRA Akademie grundlegende Kenntnisse in den SAP-Modulen: CRM, FI, HCM, LO, LE, MM, SD und SRM sowie einen kurzen Einblick in die ABAP-Programmierung.</p>
                    </div>
                    <div class="resume-item">
                        <h4>Fachinformatiker Systemintegration</h4>
                        <h5>2000 - 2002</h5>
                        <p><em>ELOP Magdeburg GmbH, Magdeburg</em></p>
                        <p class="justify">Ein bedeutender Bestandteil meiner damaligen Ausbildung war Novell NetWare, das acht Jahre später komplett eingestellt wurde. Darüber hinaus umfasste sie auch weitere Bereiche der Informatik, wie die Planung, Einrichtung und Wartung von Microsoft-Windows-Netzwerken, Datenbankmanagementsystemen und die Grundlagen der Informatik.</p>
                    </div>
                    <div class="resume-item">
                        <h4>Bau- und Möbeltischler</h4>
                        <h5>1996 - 1999</h5>
                        <p><em>TINO-Tischler GmbH, Magdeburg</em></p>
                        <p class="justify">Die Ausbildung zum Tischler umfasste die Herstellung von Möbeln und Bauelementen aus Holz und Holzwerkstoffen. Ein Bestandteil war die Arbeit an CNC-Maschinen und Programmierung in G-Code.</p>
                    </div>

                    <h3 class="resume-title">Wehrdienst</h3>
                    <div class="resume-item">
                        <h4>Panzerpionier</h4>
                        <h5>1999 - 2000</h5>
                        <p><em>Bundeswehr, Celle/Munster</em></p>
                        <p class="justify">Nach meiner Grundausbildung im 3. Panzerlehrbataillon 334 „CELLE“ wurde ich zum Kampfzug der Panzerpionierlehrkompanie 90 in Munster versetzt, wo ich den Rest meines Wehrdienstes absolvierte.</p>
                        <p class="justify">Die Panzerpioniere sind eine schwere Infanterieeinheit, die mit gepanzerten Gerät Sperren anlegt oder öffnet und Gewässerhindernisse überwindet. Dazu verwenden sie auch verschiedenste Arten von Minen und Sprengstoffen. Zusätzlich werden sie im Orts- und Häuserkampf als Spreng- und Blendtrupp, zum Öffnen von Zugängen, Barrikaden und Sprengfallen eingesetzt.</p>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Informatiker</h3>
                    <div class="resume-item">
                        <h4>Systemadministrator</h4>
                        <h5>2024 - heute</h5>
                        <p class="justify"><em>Aus Sicherheits- und Vertraulichkeitsgründen werde ich den Namen meines aktuellen Arbeitgebers hier nicht offenlegen.</em></p>
                    </div>

                    <div class="resume-item">
                        <h4>Systemadministrator</h4>
                        <h5>2019 - 2023</h5>
                        <p><em>LOOMA GmbH, Magdeburg</em></p>
                        <ul>
                            <li class="justify">1st-Level-Support, einschließlich Überwachung des Monitorings der Kundensysteme im Rahmen des Managed-Services-Angebots in den Bereichen Workstation, Server und Security, mithilfe von Zabbix und Paessler PRTG.</li>
                            <li class="justify">2nd-Level-Support im Managed-Services-Bereich Workstation mit Windows 10/11 auf Lenovo und anderen Herstellern.</li>
                            <li class="justify">2nd-Level-Support im Managed-Services-Bereich für Server mit Windows Server auf verschiedenen Herstellern.</li>
                            <li class="justify">2nd-Level-Support für den Managed-Services-Bereich Security mit Sophos Endpoint und SD/XG-Firewalls.</li>
                            <li class="justify">PowerShell-Entwickler für die Erstellung von Automatisierungsskripten für die Remote-Monitoring-und-Management-Software Datto (Kaseya).</li>
                            <li class="justify">Engineer und Administrator für Microsoft 365 und Hybridumgebungen.</li>
                            <li class="justify">Engineer und Administrator für die Open-Source Digital-Signage-Software Xibo.</li>
                        </ul>
                    </div>

                    <div class="resume-item">
                        <h4>Systemtechniker</h4>
                        <h5>2002 - 2014</h5>
                        <p class="justify"><em>Das Systemhaus Datentechnik Berlin GmbH, Berlin</em></p>
                        <ul>
                            <li class="justify">2nd-Level-Support für Laptops, Workstations und Server von Hewlett-Packard (HP).</li>
                            <li class="justify">2nd-Level-Support für POS-Kassensysteme mit Lkw-Waagen-Anschluss.</li>
                            <li class="justify">2nd-Level-Support für Druckersysteme von Hewlett-Packard (HP).</li>
                            <li class="justify">2nd-Level-Support für Industriecomputersystemen (IPC).</li>
                        </ul>
                    </div>

                    <h3 class="resume-title">Speditionskaufmann</h3>
                    <div class="resume-item">
                        <h4>Lkw-Disponent</h4>
                        <h5>2018 - 2019</h5>
                        <p><em>Spedition Gersch, Altenweddingen</em></p>
                        <ul>
                            <li class="justify">Disposition von Agrarschüttguttransporten nach GMP+.</li>
                            <li class="justify">Disposition von Langholztransporten.</li>
                            <li class="justify">Begleitung der Erneuerung der Logistik-Software und der Einführung einer neuen IP-Telefonanlage.</li>
                        </ul>
                    </div>

                    <div class="resume-item">
                        <h4>Lkw-Disponent und Berufskraftfahrer</h4>
                        <h5>2016 - 2018</h5>
                        <p><em>HaGe LOGISTIK GmbH, Haldensleben</em></p>
                        <ul>
                            <li class="justify">Disposition von Agrarschüttguttransporten nach GMP+.</li>
                            <li class="justify">Planung und Durchführung von Schiffsbe- und entladungen.</li>
                            <li class="justify">Berufskraftfahrer in der Erntezeit und während der Zuckerrübenkampagne.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="github" class="services background">
        <div class="container">
            <header data-aos="fade-left">
                <h2>GitHub-Repositories</h2>
                <p>Gelegentlich veröffentliche ich Skripte und Projekte auf meinem GitHub-Account. Diese öffentlichen Repositories sind fast immer unter einer freien Lizenz verfügbar und können von jedem genutzt werden.</p>
            </header>

            <div class="row">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    <a href="https://github.com/michel-abele/vscode-settings" target="_blank">
                        <div class="icon"><i class="bi-before bi-before-filetype-json"></i></div>
                        <h4 class="title">VS Code settings</h4>
                        <p class="description"><img src="https://img.shields.io/github/last-commit/michel-abele/vscode-settings/main?logo=github&label=last%20commit%3A%20main"> <img src="https://img.shields.io/github/last-commit/michel-abele/vscode-settings/work?logo=github&label=last%20commit%3A%20work"><br>Dieses Repository enthält verschiedene Einstellungsmöglichkeiten für den Editor Visual Studio Code. </p>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    <a href="https://github.com/michel-abele/apache-htaccess-snippets" target="_blank">
                        <div class="icon"><i class="bi-before bi-before-file-earmark"></i></div>
                        <h4 class="title">Apache htaccess snippets</h4>
                        <p class="description"><img src="https://img.shields.io/github/last-commit/michel-abele/apache-htaccess-snippets/main?logo=github&label=last%20commit%3A%20main"> <img src="https://img.shields.io/github/last-commit/michel-abele/apache-htaccess-snippets/work?logo=github&label=last%20commit%3A%20work"><br>Dieses Repository enthält verschiedene Konfigurationsschnipsel für die htaccess-Dateien des Apache HTTP Servers. </p>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    <a href="https://github.com/michel-abele/debian-preseed-workbench" target="_blank">    
                        <div class="icon"><i class="bi-before bi-before-filetype-sh"></i></div>
                        <h4 class="title">Debian preseed workbench</h4>
                        <p class="description"><img src="https://img.shields.io/github/last-commit/michel-abele/debian-preseed-workbench/main?logo=github&label=last%20commit%3A%20main"> <img src="https://img.shields.io/github/last-commit/michel-abele/debian-preseed-workbench/work?logo=github&label=last%20commit%3A%20work"><br>Eine Werkbankvorlage für die Erstellung von Debian-Preseed-ISOs.</p>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    <a href="https://github.com/michel-abele/www-abele-onl" target="_blank">    
                        <div class="icon"><i class="bi-before bi-before-file-earmark"></i></div>
                        <h4 class="title">Webseite: www.abele.onl</h4>
                        <p class="description"><img src="https://img.shields.io/github/last-commit/michel-abele/www-abele-onl/main?logo=github&label=last%20commit%3A%20main"> <img src="https://img.shields.io/github/last-commit/michel-abele/www-abele-onl/work?logo=github&label=last%20commit%3A%20work"><br>Dieses Repository enthält den gesamten Arbeitsbereich (inklusive Code und Inhalt) meiner Webseite: www.abele.onl.</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="websites" class="services">
        <div class="container">
            <header data-aos="fade-left">
                <h2>Webprojekte</h2>
                <p>Ich entwickle und erweitere regelmäßig eigene Webprojekte, um mein Wissen zu erweitern und auf dem neuesten Stand zu halten. Einige dieser Projekte sind private Projekte und andere sollen kommerzielle Privatprojekte werden.</p>
            </header>

            <div class="row">
                <p>Hier könnte Ihre Werbung stehen!</p>
            </div>
        </div>
    </section>

    <section id="games" class="services background">
        <div class="container">
            <header data-aos="fade-left">
                <h2>Game-Server</h2>
                <p>Wenn ich keine Lust auf Informatik oder Heimatforschung habe, widme ich mich der Erstellung und Verwaltung verschiedener Game-Server und spiele gerne mit Freunden und anderen Spielern darauf.</p>
            </header>

            <div class="row">
                <p>Hier könnte Ihre Werbung stehen!</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <header data-aos="fade-left">
                <h2>Kontakt</h2>
                <p>Hier finden Sie verschiedene Informationen für eine ordentliche Kontaktaufnahme. Jegliche Nutzung außerhalb dieses Zwecks wird ausnahmslos zur Anzeige gebracht.</p>
            </header>

            <div class="info row" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="address">
                            <i class="bi-before bi-before-geo-alt"></i>
                            <h4>Anschrift:</h4>
                            <p>Dahlenwarsleber Str. 4, 39326 Hohenwarsleben</p>
                        </div>
                        <div class="email">
                            <i class="bi-before bi-before-envelope"></i>
                            <h4>E-Mail-Adresse:</h4>
                            <p><a href="mailto:kontakt@michel-abele.de">kontakt@michel-abele.de</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="phone">
                            <i class="bi-before bi-before-phone"></i>
                            <h4>Telefonnummer:</h4>
                            <p><a href="tel:+4915122883384">+49 (0)151 22 88 33 84</a></p>
                        </div>
                    </div>
                </div>

                <iframe width="100%" height="350" src="https://www.openstreetmap.org/export/embed.html?bbox=11.487364768981935%2C52.17224727394878%2C11.515688896179201%2C52.18361586196997&amp;layer=mapnik&amp;marker=52.17793193118188%2C11.501526832580566"></iframe>
                <p><a href="https://www.openstreetmap.org/?mlat=52.1779&amp;mlon=11.5015#map=16/52.1779/11.5015" target="_blank">Größere Karte anzeigen</a></p>
            </div>
        </div>
    </section>

<?php
$content = ob_get_contents();
ob_end_clean();
