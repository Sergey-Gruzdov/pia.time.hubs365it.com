<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>pia's schedule__</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link href="https://fonts.googleapis.com/css?display=swap&family=Shrikhand:400,400italic" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
</head>
<body>
    <div id="wrapper">
        <div id="main">
            <div class="inner">
                <header id="header">
                    <div id="container01" class="container columns">
                        <div class="wrapper">
                            <div class="inner">
                                <div>
                                    <p id="text01">
                                        <u><a href="https://time.hubs365it.com/pic.php">♥</a></u>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="container02" class="container columns">
                        <div class="wrapper">
                            <div class="inner">
                                <div>
                                    <h1 id="text05">⠀ ͏͏͏͏͏͏ ͏͏͏͏͏͏ ͏͏͏͏͏͏ ͏͏͏͏͏͏</h1>
                                    
                                    <h1 id="text22">⠀ ͏͏͏͏͏͏ ͏͏͏͏͏͏ ͏͏͏͏͏͏ ͏͏͏͏͏͏</h1>
                                </div>
                                <div>
                                    <h1 id="text16">
                                        Pia 
                                        <em>! ♥</em>
                                    </h1>
                                    <h2 id="text10">
                                        <span class="p">
                                            <strong>
                                                <em>she/her</em>
                                                <br/>
                                            </strong>
                                             A time schedule created by my awesome boyfriend!
                                            <br/>
                                            <a href="https://pyurhost.com">My boyfriends website.</a>
                                            <br/>
                                        </span>
                                    </h2>
                                    <h1 id="text18">⠀ ͏͏͏͏͏͏ ͏͏͏͏͏͏ ͏͏͏͏͏͏ ͏͏͏͏͏͏</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="container08" class="container columns">
                        <div class="wrapper">
                            <div class="inner">
                                <div>
                                    <p id="text23">
                                        <a href="yesterday.php">yesterday</a>
                                    </p>
                                </div>
                                <div>
                                    <p id="text24">
                                        <a href="today.php">today</a>
                                    </p>
                                </div>
                                <div>
                                    <p id="text25">
                                        <a href="tomorrow.php">tomorrow</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <footer id="footer">
                    <div id="container07" class="container default">
                        <div class="wrapper">
                            <div class="inner">
                                <h1 id="text06">
                                    <?php
                                            require_once 'db.php'; // Include the database connection file
                                            try {
                                                // Prepare the SQL query
                                                $query = "SELECT * FROM modt ORDER BY RAND() LIMIT 1";
                                                $stmt = $pdo->query($query);
                                            
                                                // Fetch the results as an associative array
                                                $modts = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                            
                                                // Output the modt data (you can format it as needed)
                                                foreach ($modts as $modt) {
                                                    echo "Message of the Day: " . $modt['message'] . "<br>";
                                                }
                                            } catch (PDOException $e) {
                                                die("Error: " . $e->getMessage());
                                            }
                                    ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>