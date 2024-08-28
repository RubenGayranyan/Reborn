<title> SA:MP | Reborn Role Play</title>
<div class="homePage">
    <section id="welcome" class="welcomeSection">
        <div class="welcomeBlock">
            <strong>SA:MP</strong> - это многопользовательская версия GTA San Andreas. В сампе ты можешь быть кем угодно, начиная бездомным перед тобой открывается множество дорог: пройти путь от наркодиллера до главы мафии, от простого солдата или полицейского до главнокомандующего - смысл RolePlay режима в том что всё зависит только от тебя! Таким образом, ты можешь попробовать реализовать свои любые, даже самые смелые, идеи, ведь команда разработчиков данного проекта добавляет всё новые захватывающие возможности ролевой игры в GTA San Andreas по сети. 
            <br /><br />
            <a href="#howtostart" class="gotoStart"><div class="htpButton">Ինչպե՞ս սկսել խաղալ</div></a>
        </div>
    </section>
    <div class="padding"></div>
    <section id="howtostart" class="howToStart">
        <div class="htpBlock">
            <div class="blockhow2">
                <div class="howbg1"></div>
                <span class="howtag"></span>

                <div class="texthow2">Ներբեռնեք և տեղադրեք GTA San Andreas</div>
                <a href="assets/resources/gta-san-andreas-pc.torrent">
                    <div class="Stroke">
                        <div class="mb">15mb</div>
                        <div class="Strokedown">
                            Ներբեռնել <span class="downloadExtension">.torrent</span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="blockhow2">
                <div class="howbg2"></div>
                <span class="howtag"></span>
                <div class="texthow2">Ներբեռնեք և տեղադրեք SAMP Client</div>
                 <a href="assets/resources/sa-mp-0.3.7-install.exe">
                    <div class="Stroke">
                        <div class="mb">16mb</div>
                        <div class="Strokedown">
                            Ներբեռնել <span class="downloadExtension">.exe</span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="blockhow2">
                <div class="howbg3"></div>
                <span class="howtag"></span>
                <div class="texthow2">Ռուսիֆիկատոր - որոշ սիմվոլների ճիշտ արտածում</div>
                <a href="assets/resources/smarters-localization.zip">
                    <div class="Stroke">
                        <div class="mb">5mb</div>
                        <div class="Strokedown">
                            Ներբեռնել <span class="downloadExtension">.zip</span>
                        </div>
                    </div>    
                </a>     
            </div>

            <div class="blockhow2">
                <div class="howbg4"></div>
                <div class="texthow2">Ավելացրեք սերվերը սիրելի սերվերների ցանկում</div>
                <a href="#monitoring">
                    <div class="Stroke">
                        <div class="Strokedown">
                            Ավելացնել
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <div class="padding"></div>
    <section id="monitoring" class="monitoring">
        <?php
            $serverBind = '46.174.48.235';
            $serverPort = '7777';
            require_once("modules/SampQueryAPI.php"); 

            $query = new SampQueryAPI($serverBind, $serverPort);
            if($query->isOnline())
            {
                $serverInfo = $query->getInfo(); 
                $serverRules = $query->getRules(); 

                $serverInfoVar = $serverInfo['players'] / $serverInfo['maxplayers'] * 100;
            }
        ?>

        <div class="circular-progress" data-inner-circle-color="none" data-percentage=<?php echo intval($serverInfoVar); ?> data-progress-color="var(--accentColor)" data-bg-color="rgba(255, 255, 255, 0.1)">
            <div class="inner-circle"></div>
            <p class="percentage">0%</p>
        </div>
        <script type="text/javascript">
            const circularProgress = document.querySelectorAll(".circular-progress");
            Array.from(circularProgress).forEach((progressBar) => {
                const progressValue = progressBar.querySelector(".percentage");
                const innerCircle = progressBar.querySelector(".inner-circle");
                let startValue = 0,
                    endValue = Number(progressBar.getAttribute("data-percentage")),
                    speed = 50,
                    progressColor = progressBar.getAttribute("data-progress-color");

               

                const progress = setInterval(() => {
                    progressValue.textContent = `${startValue}%`;
                    progressValue.style.color = `${progressColor}`;

                    innerCircle.style.backgroundColor = `${progressBar.getAttribute(
                        "data-inner-circle-color"
                    )}`;

                    progressBar.style.background = `conic-gradient(${progressColor} ${
                        startValue * 3.6
                    }deg,${progressBar.getAttribute("data-bg-color")} 0deg)`;
                    if (startValue === endValue) {
                        clearInterval(progress);
                    }
                    startValue++;
                }, speed);
            });
        </script>
        <div class="monitorSection">
            <div class="monitorContentBlock">
                <div class="monitorContentBlockWrapper">
                    <center><h3>Սերվերի մասին</h3></center> <br />
                    <p><strong>Սերվերի անունը՝</strong> <?php echo $serverInfo['hostname']; ?></p>
                    <p><strong>Սերվերի IP-հասցեն՝</strong> <?php echo $serverBind . ':' . $serverPort; ?></p>
                    <p>
                        <strong>Սերվերի կարգավիճակը՝</strong>
                        <?php
                            if ($serverInfo['password'] == 0 && $serverInfo['maxplayers'] != 0)
                                echo '<span style="color:green;">Online</span>';
                            elseif ($serverInfo['password'] != 0 && $serverInfo['maxplayers'] != 0)
                                echo '<span style="color:yellow;">Տեխնիկական աշխատանքներ</span>';
                            else
                                echo '<span style="color:red;">Offline</span>'
                        ?>
                    </p>
                    <p><strong>Խաղացողների քանակը՝</strong> <?php echo $serverInfo['players']; ?>/ <?php echo $serverInfo['maxplayers']; ?>-ից</p>
                    <br>
                    <a href="samp://127.0.0.1" class="gotoStart"><div class="ucpButton" style="font-weight:bold;text-align:center;border-radius:15px;">Միացի՛ր մեզ հիմա</div></a>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    function onEntry(entry) {
      entry.forEach(change => {
        if (change.isIntersecting) {
         change.target.classList.add('element-show');
        }
      });
    }

    let options = {
      threshold: [0.5] };
    let observer = new IntersectionObserver(onEntry, options);
    let loadHTP = document.querySelectorAll('.blockhow2');
    let loadMonitor = document.querySelectorAll('.monitoring');

    for (let elm of loadHTP) {
      observer.observe(elm);
    }
    for (let elm of loadMonitor) {
      observer.observe(elm);
    }
</script>
