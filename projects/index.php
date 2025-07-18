<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Ubuntu&family=Open+Sans&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu&family=Open+Sans&display=swap" media="print" onload="this.media='all'" />
    <link rel="icon" href="https://picsum.photos/256/256?random=1" type="image/x-icon">
    <title>Projects</title>
    <!-- Mobile-friendly navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Anthony Chen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/">Home</a>
                    <a class="nav-link" href="/resume/">Résumé</a>
                    <a class="nav-link active" href="/projects/">Projects</a>
                    <a class="nav-link" href="/blog/">Blog</a>
                    <a class="nav-link" href="/apps/">Apps</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <input class="search-box" type="text" placeholder="Search...">
                    <i class="fa fa-search fa-2x px-2 icon"></i>
                </div>
            </div>
        </div>
    </nav>
</head>

<body>
    <div class="container">
        <div class="page-header">
            <h1>Projects<span class="blinking">_</span></h1>
        </div>
        <hr>
        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link nav-tab-style active" id="best-tab" data-bs-toggle="tab" data-bs-target="#best" type="button" role="tab" aria-controls="best" aria-selected="true">Best</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link nav-tab-style" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="false">All</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="best" role="tabpanel" aria-labelledby="best-tab">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span>6 projects retrieved. These are just a few of my best projects in random order—check out the All tab and my <a href="https://github.com/slightlyskepticalpotat">Github</a>!</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="row">
                    <?php
                        $projects = array(<<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/ctfoj.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">CTFOJ</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalA">More</button>
                                    <a href="https://github.com/jdabtieu/CTFOJ">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalA" tabindex="-1" aria-labelledby="modalALabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalALabel">CTFOJ</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>An open-source online judge specifically designed for hosting interactive cybersecurity challenges and contests. Features include practice problems, contests, an admin console, two-factor authentication, a comprehensive test suite, and live rankings. Built with Flask, in collaboration with <a href="https://github.com/jdabtieu/">jdabtieu</a>.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/website.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">chenanthony.com</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalB">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/chenanthony">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalB" tabindex="-1" aria-labelledby="modalBLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalBLabel">chenanthony.com</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>A website that hosts a short description of myself, my resume, a listing of my projects with a short description for each one, my contact information, and my blog. Eventually, web applications and PHP applications that I create will also be accessible here. Accessible online at <a href="https://chenanthony.com">chenanthony.com</a>.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/bookar.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">bookmarkarchiver</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalC">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/bookmarkarchiver">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalC" tabindex="-1" aria-labelledby="modalCLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalCLabel">bookmarkarchiver</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>A customisable tool used to archive all of your browser bookmarks on the <a href="http://web.archive.org/">Internet Archive</a>. It supports all major browsers (any browser that allows bookmark exporting, really), and has a theoretical limit of 100,000 websites saved per day. Does not require an <a href="http://web.archive.org/">Internet Archive</a> account.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/markov.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">simple-markov</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalD">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/simple-markov">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalD" tabindex="-1" aria-labelledby="modalDLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalDLabel">simple-markov</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>A fast and simple <a href="https://en.wikipedia.org/wiki/Markov_chain">Markov chain</a>-based text generator written in C++. The number of preceding states used, temperature of the generated text (how "random" it looks), and number of words to generate are all configurable. Can be used to generate words letter-by-letter, sentences word-by-word, and [indirectly] paragraphs sentence-by_sentence.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/snake.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">snakewhisper</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalE">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/snakewhisper">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalE" tabindex="-1" aria-labelledby="modalELabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalELabel">snakewhisper</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>A simple end-to-end encrypted chat program written in Python. It's functional (it currently supports two-way communication with elliptic curve key exchange and AES-128 encryption), but snakewhisper is primarily a proof-of-concept that showcases how regular computer users can easily access—or even create—chat programs with end-to-end encryption.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/stonk.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">stonktrack</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalF">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/stonktrack">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalF" tabindex="-1" aria-labelledby="modalFLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalFLabel">stonktrack</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>A financial tracker that can track stocks, cryptocurrencies, forexes, and more with simple configuration files and a terminal-based gui. It's built with Python and <a href="http://urwid.org/">urwid</a>, and it's superior to other terminal stock trackers because of the real-time data, variety of assets, and unlimited free updates. Comes with coloured and scrollable versions.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS
                        );
                        shuffle($projects);
                        echo(implode("", $projects));
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="all-tab">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span>21 projects retrieved. These are just a few of my projects in random order—check out the Best tab and my <a href="https://github.com/slightlyskepticalpotat">Github</a>!</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="row">
                    <?php
                        $projects_all = array(<<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/aitic.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">ai-tictactoe</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalZero">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/ai-tictactoe">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalZero" tabindex="-1" aria-labelledby="modalZeroLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalZeroLabel">ai-tictactoe</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>An object-oriented tic-tac-toe using artifical intelligence. Available with both CLI and GUI clients (built with pygame), ai-tictactoe uses the <a href="https://en.wikipedia.org/wiki/Minimax">minimax</a> algorithm with <a href="https://en.wikipedia.org/wiki/Alpha%E2%80%93beta_pruning">alpha-beta pruning</a> to play the optimal move every time. Finally, this program can be modified to play other games like Gomuku and Connect Four.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/rc4.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">RC4-variants</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalOne">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/RC4-variants">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalOne" tabindex="-1" aria-labelledby="modalOneLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalOneLabel">RC4-variants</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>An object-oriented implemention of RC4-drop[n], a modification of the simple and speedy RC4 stream cipher that defends against the Fluhrer, Mantin and Shamir attack by discarding the first n bytes of the keystream after key generation. Can also be used as regular RC4 by setting n = 0, or a performant pseudorandom number generator.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/cp.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">programming-solutions</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalTwo">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/programming-solutions">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalTwo" tabindex="-1" aria-labelledby="modalTwoLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalTwoLabel">programming-solutions</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>An archive of correct solutions to problems on various online judges, programming challenges, and contests. Includes code from DMOJ, Codeforces, the CCC, the CCO, the USACO, the Google Foobar challenge, and more.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/ctfoj.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">CTFOJ</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalThree">More</button>
                                    <a href="https://github.com/jdabtieu/CTFOJ">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalThree" tabindex="-1" aria-labelledby="modalThreeLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalThreeLabel">CTFOJ</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>An open-source online judge specifically designed for hosting interactive cybersecurity challenges and contests. Features include practice problems, contests, an admin console, two-factor authentication, a comprehensive test suite, and live rankings. Built with Flask, in collaboration with <a href="https://github.com/jdabtieu/">jdabtieu</a>.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/website.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">chenanthony.com</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalFour">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/chenanthony">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalFour" tabindex="-1" aria-labelledby="modalFourLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalFourLabel">chenanthony.com</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>A website that hosts a short description of myself, my resume, a listing of my projects with a short description for each one, my contact information, and my blog. Eventually, web applications and PHP applications that I create will also be accessible here. Accessible online at <a href="https://chenanthony.com">chenanthony.com</a>.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/subdl.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">submission-downloader</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalFive">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/submission-downloader">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalFive" tabindex="-1" aria-labelledby="modalFiveLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalFiveLabel">submission-downloader</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>A customisable tool used for archiving code submissions in bulk from a wide variety of programming sites. Packaged with the pip package manager, and can easily be modified to archive code from unsupported sites. Especially helpful for creating <a href="https://github.com/slightlyskepticalpotat/programming-solutions">solution archives</a>.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/exactum.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">exactum</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalSix">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/exactum">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalSix" tabindex="-1" aria-labelledby="modalSixLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalSixLabel">exactum</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>A flexible web monitoring tool for websites that have no built-in update notification system. Configured with YAML, Exactum supports multi-platform desktop notifications, email notifications, and logging changes to a file. Created during <a href="https://hackthenorth.com/">Hack the North 2020</a> in collaboration with <a href="https://github.com/AlanL2">AlanL2</a> and <a href="https://github.com/Maillew">Maillew</a>. Project website available <a href="https://exactum1.github.io/">here</a>.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/conway.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">zoetrope-game-of-life</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalSeven">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/zoetrope-game-of-life">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalSeven" tabindex="-1" aria-labelledby="modalSevenLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalSevenLabel">zoetrope-game-of-life</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>A high-speed console-based Python implementation of the famous cellular automaton. It appears to move despite being non-animated, much like a <a href="https://en.wikipedia.org/wiki/Zoetrope">Zoetrope</a>. Turing-complete, it can theoretically simulate any computer algorithm in existence. The picture shows a <a href="https://en.wikipedia.org/wiki/Gun_(cellular_automaton)">Gosper glider gun</a> in action.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/track.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">divoc: covid tracker</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEight">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/divoc">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalEight" tabindex="-1" aria-labelledby="modalEightLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalEightLabel">divoc: covid tracker</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>A COVID-19 tracker that uses several public APIs to generate a count of the number of COVID-19 cases within a certain customisable distance of any address in Ontario. Includes a COVID-19 self-assessment tool that takes the number of cases near you into account. Created during <a href="https://www.tohacks.ca">TOHacks 2020</a> in collaboration with <a href="https://github.com/Maillew">Maillew</a> and <a href="https://github.com/tankibuds">tankibuds</a>.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/markov.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">simple-markov</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalNine">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/simple-markov">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalNine" tabindex="-1" aria-labelledby="modalNineLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalNineLabel">simple-markov</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>A fast and simple <a href="https://en.wikipedia.org/wiki/Markov_chain">Markov chain</a>-based text generator written in C++. The number of preceding states used, temperature of the generated text (how "random" it looks), and number of words to generate are all configurable. Can be used to generate words letter-by-letter, sentences word-by-word, and [indirectly] paragraphs sentence-by_sentence.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/aesecb.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">cryptopals-solutions</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalTen">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/cryptopals-solutions">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalTen" tabindex="-1" aria-labelledby="modalTenLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalTenLabel">cryptopals-solutions</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>A repository of my solutions to the <a href="http://cryptopals.com/">cryptopals</a> cryptography challenges. Common advice is to "never roll your own". However, this advice should be amended to "never use your own". With the rise in digital threats, any computer programmer should at least have a basic understanding of cryptography. And what better way to learn than by doing?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/mt.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">mersenne-twister-tools</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEleven">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/mersenne-twister-tools">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalEleven" tabindex="-1" aria-labelledby="modalElevenLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalElevenLabel">mersenne-twister-tools</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>A collection of various programs that implement or relate to the popular <a href="https://en.wikipedia.org/wiki/Mersenne_Twister">Mersenne Twister</a> PRNG in some way. Intended to be a simple implementation that users can build off of. Includes the original 32 and 64-bit versions, other popular variants, programs to crack the state of the Mersenne Twister, and programs to time travel and reverse the Mersenne Twister.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/stonk.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">stonktrack</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalTwelve">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/stonktrack">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalTwelve" tabindex="-1" aria-labelledby="modalTwelveLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalTwelveLabel">stonktrack</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>A financial tracker that can track stocks, cryptocurrencies, forexes, and more with simple configuration files and a terminal-based gui. It's built with Python and <a href="http://urwid.org/">urwid</a>, and it's superior to other terminal stock trackers because of the real-time data, variety of assets, and unlimited free updates. Comes with coloured and scrollable versions.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/flask.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">simple-markov-flask</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalThirteen">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/simple-markov-flask">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalThirteen" tabindex="-1" aria-labelledby="modalThirteenLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalThirteenLabel">simple-markov-flask</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>A Flask frontend for the <a href="https://github.com/slightlyskepticalpotat/simple-markov">simple-markov</a> script, it seamlessly integrates an HTML/JS/CSS frontend with the original C++ program serving as the backend. It also uses hCAPTCHA to prevent Denial of Service attacks while still respecting users' privacy. It's hosted on this site <a href="https://chenanthony.com/apps/markov/">here</a>, and users can upload custom text training data to test it.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/snake.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">snakewhisper</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalFourteen">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/snakewhisper">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalFourteen" tabindex="-1" aria-labelledby="modalFourteenLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalFourteenLabel">snakewhisper</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>A simple end-to-end encrypted chat program written in Python. It's functional (it currently supports two-way communication with elliptic curve key exchange and AES-128 encryption), but snakewhisper is primarily a proof-of-concept that showcases how regular computer users can easily access—or even create—chat programs with end-to-end encryption.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/cs50x.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">cs50x-2021</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalFifteen">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/cs50x-2021">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalFifteen" tabindex="-1" aria-labelledby="modalFifteenlabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalFifteenlabel">cs50x-2021</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>This repository contains my coursework for the 2021 CS50x: Introduction to Computer Science online course offered by Harvard University. The course covered a wide variety of languages and technologies including Scratch, C, Python, SQL, HTML, CSS, JavaScript, and Flask.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/gennet.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">GenNet</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalSixteen">More</button>
                                    <a href="https://github.com/AbdulBaseetShabi/GenNet">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalSixteen" tabindex="-1" aria-labelledby="modalSixteenlabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalSixteenlabel">GenNet</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>A novel way to connect with the generations of your family before and after you, GenNet allows users to create "trees" for their families and populate the "leaves" of the tree with pieces of knowledge, anecdotes, or photos and videos. Built in collaboration with <a href="https://github.com/AbdulBaseetShabi">AbdulBaseetShabi</a>, <a href="https://github.com/Arihan10">Arihan10</a>, and <a href="https://github.com/divyxnsh">divyxnsh</a> at <a href="https://hackthenorth.com/">Hack the North 2021</a>.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/cs50ai.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">cs50ai-2021</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalSeventeen">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/cs50ai-2021">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalSeventeen" tabindex="-1" aria-labelledby="modalSeventeenlabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalSeventeenlabel">cs50ai-2021</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>This repository contains my coursework for the 2021 CS50ai: Introduction to Artificial Intelligence online course offered by Harvard University. The course explored concepts and algorithms behind artificial intelligence with a variety of languages and technologies including Python, HTML, Tensorflow, Pygame, scikit-learn, numpy, and nltk.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/bookar.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">bookmarkarchiver</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEighteen">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/bookmarkarchiver">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalEighteen" tabindex="-1" aria-labelledby="modalEighteenLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalEighteenLabel">bookmarkarchiver</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>A customisable tool used to archive all of your browser bookmarks on the <a href="http://web.archive.org/">Internet Archive</a>. It supports all major browsers (any browser that allows bookmark exporting, really), and has a theoretical limit of 100,000 websites saved per day. Does not require an <a href="http://web.archive.org/">Internet Archive</a> account.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/super.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">superlumic</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalNineteen">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/superlumic">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalNineteen" tabindex="-1" aria-labelledby="modalNineteenLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalNineteenLabel">superlumic</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>A performant, secure, and cross-platform command-line password manager. Superlumic allows you to create, load, and store encrypted password lists. Once loaded, you can create, read, update, delete, and reorder the passwords in each password list. The passwords are encrypted with AES-256 in CTR mode and a user-provided password.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS,
                        <<<EOS
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img class="card-img-top card-image" loading="lazy" src="/assets/img/doge.webp" alt="Network error, image failed to load.">
                                <div class="card-body">
                                    <h4 class="card-title text-center">dogecoin-unofficial</h4>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalTwenty">More</button>
                                    <a href="https://github.com/slightlyskepticalpotat/dogecoin-unofficial">
                                        <i class="fas fa-external-link-alt fa-2x px-2 icon float-end"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="modalTwenty" tabindex="-1" aria-labelledby="modalTwentyLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalTwentyLabel">dogecoin-unofficial</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Linux Snap for Dogecoin Core available on the Snap Store. The dogecoin-unofficial snap is unofficial, but it downloads and verifies official binaries from GitHub. This snap will be updated within 1 day of each official release, and the build script and generated .snap files are viewable.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        EOS
                        );
                        shuffle($projects_all);
                        echo(implode("", $projects_all));
                    ?>
                </div>
            </div>
        <hr>
    </div>
</body>
<footer class="footer">
    <div class="container text-center">
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="/">
                    <i class="fa fa-globe fa-2x px-2 icon"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="mailto:chenanthony365@gmail.com">
                    <i class="fa fa-envelope fa-2x px-2 icon"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="https://github.com/slightlyskepticalpotat">
                    <i class="fab fa-github fa-2x px-2 icon"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="/pgp/">
                    <i class="fas fa-key fa-2x px-2 icon"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/anthony-chen-512719207/">
                    <i class="fab fa-linkedin fa-2x px-2 icon"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="text-center">
        <p><small>Copyright Anthony Chen, 2019–2022. This website is licenced under the <a href="http://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0 Licence</a>.</small></p>
    </div>
</footer>
<!-- jquery unique to this page for persisting tab across refresh -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/js/bootstrap.min.js" integrity="sha512-mp3VeMpuFKbgxm/XMUU4QQUcJX4AZfV5esgX72JQr7H7zWusV6lLP1S78wZnX2z9dwvywil1VHkHZAqfGOW7Nw==" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/vanilla-back-to-top@7.2.1/dist/vanilla-back-to-top.min.js"></script>
<script>addBackToTop({
  diameter: 48,
  backgroundColor: 'slateblue',
  textColor: '#fff'
})</script>
<script src="/assets/js/index.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

</html>
