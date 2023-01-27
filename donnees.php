<?php

$titreaccueil       = "Algo-LEGO | Accueil";

$titreblois         = "Algo-LEGO | Blois";
$titrenantes        = "Algo-LEGO | Nantes";
$titreorleans       = "Algo-LEGO | Orléans";
$titretours         = "Algo-LEGO | Tours";

$boutiques =    [
                    "blois" => [
                                "lotspromo"     =>
                                                    [
                                                        [    
                                                            "image"     => "images/lot.png",
                                                            "nom"       => "Les grandes villes",
                                                            "numero"    => "21044, 21028, 21034",
                                                            "age"       => "12+",
                                                            "prix"     => "109,99",
                                                            "quantite"  => "13"
                                                        ],
                                                        [
                                                            "image"     => "images/lot.png",
                                                            "nom"       => "Les icones de Star Wars",
                                                            "numero"    => "75313, 75329, 75300",
                                                            "age"       => "18+",
                                                            "prix"      => "899,99",
                                                            "quantite"  => "4"
                                                        ],
                                                        [
                                                            "image"     => "images/lot.png",
                                                            "nom"       => "La bataille finale",
                                                            "numero"    => "80028, 80039, 80033",
                                                            "age"       => "10+",
                                                            "prix"      => "319.99",
                                                            "quantite"  => "1"
                                                        ]
                                                    ],

                                "themeimage" => 
                                                [
                                                    "architecture"  => "images/architecture.jpg",
                                                    "starwars"      => "images/starwars.png",
                                                    "monkiekid"     => "images/monkiekid.png"
                                                ],

                                "themes" => 
                                            [
                                                "architecture"       => [
                                                                            
                                                                            [   
                                                                                "image"     => "images/architecture/paris.png",
                                                                                "nom"       => "Paris",
                                                                                "numero"    => "21044",
                                                                                "nbpieces"  => "649",
                                                                                "age"       => "12+",
                                                                                "prix"      => "49.99",
                                                                                "quantite"  => "13"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/architecture/new_york.png",
                                                                                "nom"       => "New York City",
                                                                                "numero"    => "21028",
                                                                                "nbpieces"  => "598",
                                                                                "age"       => "12+",
                                                                                "prix"      => "49.99",
                                                                                "quantite"  => "18"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/architecture/london.png",
                                                                                "nom"       => "londres",
                                                                                "numero"    => "21034",
                                                                                "nbpieces"  => "468",
                                                                                "age"       => "12+",
                                                                                "prix"      => "39.99",
                                                                                "quantite"  => "14"
                                                                            ]
                                                                        ],
                                                "starwars"           => [ 

                                                                            [   
                                                                                "image"     => "images/star_wars/atat.jpg",
                                                                                "nom"       => "AT-AT | Ultimate Collector Series",
                                                                                "numero"    => "75313",
                                                                                "nbpieces"  => "6785",
                                                                                "age"       => "18+",
                                                                                "prix"      => "849.99",
                                                                                "quantite"  => "4"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/star_wars/diaporama.jpg",
                                                                                "nom"       => "Diaporama | Course sur l'Etoile Noire",
                                                                                "numero"    => "75329",
                                                                                "nbpieces"  => "665",
                                                                                "age"       => "18+",
                                                                                "prix"      => "69.99",
                                                                                "quantite"  => "12"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/star_wars/tie_fighter.png",
                                                                                "nom"       => "TIE fighter impérial",
                                                                                "numero"    => "75300",
                                                                                "nbpieces"  => "432",
                                                                                "age"       => "8+",
                                                                                "prix"      => "44.99",
                                                                                "quantite"  => "22"
                                                                            ]
                                                                        ],
                                                "monkiekid"          => [ 

                                                                            [   
                                                                                "image"     => "images/monkie_kid/bone_demon.jpg",
                                                                                "nom"       => "Le bone demon",
                                                                                "numero"    => "80028",
                                                                                "nbpieces"  => "1375",
                                                                                "age"       => "9+",
                                                                                "prix"      => "119.99",
                                                                                "quantite"  => "1"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/monkie_kid/celestial_realm.jpg",
                                                                                "nom"       => "Le royaume celeste",
                                                                                "numero"    => "80039",
                                                                                "nbpieces"  => "2433",
                                                                                "age"       => "10+",
                                                                                "prix"      => "179.99",
                                                                                "quantite"  => "1"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/monkie_kid/macaque_mech.png",
                                                                                "nom"       => "Le robot de Macaque",
                                                                                "numero"    => "80033",
                                                                                "nbpieces"  => "1212",
                                                                                "age"       => "8+",
                                                                                "prix"      => "64.99",
                                                                                "quantite"  => "3"
                                                                            ]
                                                                            ]

                                            ],
                        "horaires"      => [
                                                "lundi"         => "10:00 - 18:30",
                                                "mardi"         => "10:00 - 18:30",
                                                "mercredi"      => "10:00 - 18:30",
                                                "jeudi"         => "10:00 - 18:30",
                                                "vendredi"      => "10:00 - 18:30",
                                                "samedi"        => "10:00 - 18:30",
                                                "dimanche"      => "fermé"
                        ],

                        "map"           => "images/blois.jpg",
                        "magasin"       => "images/boutiqueblois.jpg",
                        "coordonnees"   => "12 Rue Denis Papin",
                        "codepostal"    => "41290 - Blois",
                        "tel"           => "02.54.66.14.69",

                        "personnel"     => [
                                                [
                                                    "photo"     => "images/girl.png",
                                                    "nom"       => "Jeanne",
                                                    "fonctions" => "Manager des ventes"
                                                ],

                                                [
                                                    "photo"     => "images/girl.png",
                                                    "nom"       => "Lola",
                                                    "fonctions" => "Vendeuse en magasin"
                                                ],

                                                [
                                                    "photo"     => "images/boy.jpg",
                                                    "nom"       => "Pascal",
                                                    "fonctions" => "Préparateur de commandes web"
                                                ],

                                                [
                                                    "photo"     => "images/boy.jpg",
                                                    "nom"       => "Eric",
                                                    "fonctions" => "Vendeur en magasin"
                                                ]

                                            ],

                        "reseaux"       => [
                                                "twitter"   => "@Algo-LEGO_Blois",
                                                "instagram" => "@Algo-LEGO_Blois",
                                                "facebook"  => "@Algo-LEGO_Blois"
                                            ]
                                ],


// -----------------------------------------------------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------------------------------------------------


                    "orleans" => [
                                "lotspromo"     =>
                                                    [
                                                        [    
                                                            "image"     => "images/lot.png",
                                                            "nom"       => "Kits créatifs",
                                                            "numero"    => "10698, 11017, 11013",
                                                            "age"       => "4+",
                                                            "prix"      => "79,99",
                                                            "quantite"  => "13"
                                                        ],
                                                        [
                                                            "image"     => "images/lot.png",
                                                            "nom"       => "Arts en tout genre",
                                                            "numero"    => "21226, 31207, 31208",
                                                            "age"       => "16+",
                                                            "prix"      => "239,99",
                                                            "quantite"  => "1"
                                                        ],
                                                        [
                                                            "image"     => "images/lot.png",
                                                            "nom"       => "Collection de héros",
                                                            "numero"    => "40560, 40631, 40381",
                                                            "age"       => "10+",
                                                            "prix"      => "49.99",
                                                            "quantite"  => "2"
                                                        ]
                                                    ],

                                "themeimage" => 
                                                [
                                                    "classic"       => "images/classic.jpg",
                                                    "art"           => "images/art.jpg",
                                                    "brickheadz"    => "images/brickheadz.png"
                                                ],

                                "themes" => 
                                            [
                                                "classic"       => [
                                                                            
                                                                            [   
                                                                                "image"     => "images/classic/box.jpg",
                                                                                "nom"       => "Boîte de briques créatives deluxe LEGO®",
                                                                                "numero"    => "10698",
                                                                                "nbpieces"  => "790",
                                                                                "age"       => "4-99",
                                                                                "prix"      => "49.99",
                                                                                "quantite"  => "13"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/classic/monsters.png",
                                                                                "nom"       => "Monstres Créatifs",
                                                                                "numero"    => "11017",
                                                                                "nbpieces"  => "140",
                                                                                "age"       => "4+",
                                                                                "prix"      => "9.99",
                                                                                "quantite"  => "51"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/classic/transparent.png",
                                                                                "nom"       => "Briques transparentes créatives",
                                                                                "numero"    => "11013",
                                                                                "nbpieces"  => "500",
                                                                                "age"       => "4+",
                                                                                "prix"      => "34.99",
                                                                                "quantite"  => "16"
                                                                            ]
                                                                        ],
                                                "art"           => [ 

                                                                            [   
                                                                                "image"     => "images/art/create.jpg",
                                                                                "nom"       => "Projet artistique - Créer ensemble",
                                                                                "numero"    => "21226",
                                                                                "nbpieces"  => "4138",
                                                                                "age"       => "7+",
                                                                                "prix"      => "119.99",
                                                                                "quantite"  => "7"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/art/floral.jpg",
                                                                                "nom"       => "Art floral",
                                                                                "numero"    => "31207",
                                                                                "nbpieces"  => "2870",
                                                                                "age"       => "18+",
                                                                                "prix"      => "69.99",
                                                                                "quantite"  => "4"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/art/wave.png",
                                                                                "nom"       => "Hokusai – La Grande vague",
                                                                                "numero"    => "31208",
                                                                                "nbpieces"  => "1810",
                                                                                "age"       => "18+",
                                                                                "prix"      => "99.99",
                                                                                "quantite"  => "1"
                                                                            ]
                                                                        ],
                                                "brickheadz"          => [ 

                                                                            [   
                                                                                "image"     => "images/brickheadz/hogwarts.png",
                                                                                "nom"       => "Les professeurs de Poudlard",
                                                                                "numero"    => "40560",
                                                                                "nbpieces"  => "601",
                                                                                "age"       => "10+",
                                                                                "prix"      => "39.99",
                                                                                "quantite"  => "12"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/brickheadz/lordofrings.png",
                                                                                "nom"       => "Gandalf le Gris et le Balrog™",
                                                                                "numero"    => "40631",
                                                                                "nbpieces"  => "348",
                                                                                "age"       => "10+",
                                                                                "prix"      => "19.99",
                                                                                "quantite"  => "7"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/brickheadz/wukong.png",
                                                                                "nom"       => "Monkey King",
                                                                                "numero"    => "40381",
                                                                                "nbpieces"  => "175",
                                                                                "age"       => "10+",
                                                                                "prix"      => "9.99",
                                                                                "quantite"  => "2"
                                                                            ]
                                                                            ]

                                            ],
                        "horaires"      => [
                                                "lundi"         => "09:00 - 19:00",
                                                "mardi"         => "09:00 - 19:00",
                                                "mercredi"      => "09:00 - 19:00",
                                                "jeudi"         => "09:00 - 19:00",
                                                "vendredi"      => "09:00 - 19:00",
                                                "samedi"        => "09:00 - 19:00",
                                                "dimanche"      => "fermé"
                        ],

                        "map"           => "images/orleans.png",
                        "magasin"       => "images/boutiqueorleans.jpg",
                        "coordonnees"   => "7 Rue Jeanne d'Arc",
                        "codepostal"    => "45000 - Orleans",
                        "tel"           => "02.54.84.44.27",

                        "personnel"     => [
                                                [
                                                    "photo"     => "images/boy.jpg",
                                                    "nom"       => "Frank",
                                                    "fonctions" => "Manager des ventes"
                                                ],

                                                [
                                                    "photo"     => "images/boy.jpg",
                                                    "nom"       => "Marcel",
                                                    "fonctions" => "Vendeur en magasin"
                                                ],

                                                [
                                                    "photo"     => "images/girl.png",
                                                    "nom"       => "Valérie",
                                                    "fonctions" => "Préparatrice de commandes web"
                                                ],

                                                [
                                                    "photo"     => "images/boy.jpg",
                                                    "nom"       => "Jean-Michel",
                                                    "fonctions" => "Vendeur en magasin"
                                                ]

                                            ],

                        "reseaux"       => [
                                                "twitter"   => "@Algo-LEGO_Orléans",
                                                "instagram" => "@Algo-LEGO_Orléans",
                                                "facebook"  => "@Algo-LEGO_Orléans"
                                            ]
                                ],


// -----------------------------------------------------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------------------------------------------------


                    "tours" => [
                                "lotspromo"     =>
                                                    [
                                                        [    
                                                            "image"     => "images/lot.png",
                                                            "nom"       => "La ville",
                                                            "numero"    => "60374, 60388, 60384",
                                                            "age"       => "7+",
                                                            "prix"     => "109,99",
                                                            "quantite"  => "11"
                                                        ],
                                                        [
                                                            "image"     => "images/lot.png",
                                                            "nom"       => "Les créations 3-en-1",
                                                            "numero"    => "31088, 31129, 31132",
                                                            "age"       => "18+",
                                                            "prix"      => "89,99",
                                                            "quantite"  => "5"
                                                        ],
                                                        [
                                                            "image"     => "images/lot.png",
                                                            "nom"       => "Les gros moteurs",
                                                            "numero"    => "42130, 42151, 42115",
                                                            "age"       => "16+",
                                                            "prix"      => "699.99",
                                                            "quantite"  => "1"
                                                        ]
                                                    ],

                                "themeimage" => 
                                                [
                                                    "city"              => "images/city.jpg",
                                                    "creator3in1"       => "images/creator.jpg",
                                                    "technic"           => "images/technic.png"
                                                ],

                                "themes" => 
                                            [
                                                "city"                  => [
                                                                            
                                                                            [   
                                                                                "image"     => "images/city/firetruck.jpg",
                                                                                "nom"       => "Le camion d’intervention des pompiers",
                                                                                "numero"    => "60374",
                                                                                "nbpieces"  => "502",
                                                                                "age"       => "7+",
                                                                                "prix"      => "54.99",
                                                                                "quantite"  => "14"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/city/gamingtruck.png",
                                                                                "nom"       => "Le camion de tournois de jeux vidéo",
                                                                                "numero"    => "60388",
                                                                                "nbpieces"  => "344",
                                                                                "age"       => "7+",
                                                                                "prix"      => "44.99",
                                                                                "quantite"  => "15"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/city/penguin.png",
                                                                                "nom"       => "Le camion à granités du pingouin",
                                                                                "numero"    => "60384",
                                                                                "nbpieces"  => "194",
                                                                                "age"       => "5+",
                                                                                "prix"      => "19.99",
                                                                                "quantite"  => "11"
                                                                            ]
                                                                        ],
                                                "creator3in1"        => [ 

                                                                            [   
                                                                                "image"     => "images/creator3in1/seacreatures.png",
                                                                                "nom"       => "Les créatures sous-marines",
                                                                                "numero"    => "31088",
                                                                                "nbpieces"  => "230",
                                                                                "age"       => "7+",
                                                                                "prix"      => "14.99",
                                                                                "quantite"  => "14"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/creator3in1/tiger.png",
                                                                                "nom"       => "Sa Majesté le Tigre",
                                                                                "numero"    => "31129",
                                                                                "nbpieces"  => "755",
                                                                                "age"       => "9+",
                                                                                "prix"      => "49.99",
                                                                                "quantite"  => "6"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/creator3in1/viking.png",
                                                                                "nom"       => "Le bateau viking et le serpent de Midgard",
                                                                                "numero"    => "31132",
                                                                                "nbpieces"  => "1192",
                                                                                "age"       => "9+",
                                                                                "prix"      => "119.99",
                                                                                "quantite"  => "5"
                                                                            ]
                                                                        ],
                                                "technic"           => [ 

                                                                            [   
                                                                                "image"     => "images/technic/bmw.jpg",
                                                                                "nom"       => "BMW M 1000 RR",
                                                                                "numero"    => "42130",
                                                                                "nbpieces"  => "1921",
                                                                                "age"       => "18+",
                                                                                "prix"      => "249.99",
                                                                                "quantite"  => "4"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/technic/bugatti.jpg",
                                                                                "nom"       => "Le bolide Bugatti",
                                                                                "numero"    => "42151",
                                                                                "nbpieces"  => "905",
                                                                                "age"       => "9+",
                                                                                "prix"      => "49.99",
                                                                                "quantite"  => "12"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/technic/sian.png",
                                                                                "nom"       => "Lamborghini Sián FKP 37",
                                                                                "numero"    => "42115",
                                                                                "nbpieces"  => "3696",
                                                                                "age"       => "18+",
                                                                                "prix"      => "449.99",
                                                                                "quantite"  => "1"
                                                                            ]
                                                                            ]

                                            ],
                        "horaires"      => [
                                                "lundi"         => "09:00 - 19:00",
                                                "mardi"         => "09:00 - 19:00",
                                                "mercredi"      => "09:00 - 19:00",
                                                "jeudi"         => "09:00 - 19:00",
                                                "vendredi"      => "09:00 - 19:00",
                                                "samedi"        => "09:00 - 19:00",
                                                "dimanche"      => "fermé"
                        ],

                        "map"           => "images/tours.png",
                        "magasin"       => "images/boutiquetours.jpg",
                        "coordonnees"   => "22 Avenue andré Maginot",
                        "codepostal"    => "37000 - Tours",
                        "tel"           => "02.54.49.59.18",

                        "personnel"     => [
                                                [
                                                    "photo"     => "images/boy.jpg",
                                                    "nom"       => "Philipe",
                                                    "fonctions" => "Manager des ventes"
                                                ],

                                                [
                                                    "photo"     => "images/girl.png",
                                                    "nom"       => "Elaine",
                                                    "fonctions" => "Vendeuse en magasin"
                                                ],

                                                [
                                                    "photo"     => "images/girl.png",
                                                    "nom"       => "Ellie",
                                                    "fonctions" => "Préparatrice de commandes web"
                                                ],

                                                [
                                                    "photo"     => "images/boy.jpg",
                                                    "nom"       => "Gabriel",
                                                    "fonctions" => "Vendeur en magasin"
                                                ]

                                            ],

                        "reseaux"       => [
                                                "twitter"   => "@Algo-LEGO_Tours",
                                                "instagram" => "@Algo-LEGO_Tours",
                                                "facebook"  => "@Algo-LEGO_Tours"
                                            ]
                                ],


// -----------------------------------------------------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------------------------------------------------


                    "nantes" => [
                                "lotspromo"     =>
                                                    [
                                                        [    
                                                            "image"     => "images/lot.png",
                                                            "nom"       => "Combat contre le Roi de Crystal",
                                                            "numero"    => "71775, 71774, 71772",
                                                            "age"       => "10+",
                                                            "prix"      => "289,99",
                                                            "quantite"  => "6"
                                                        ],
                                                        [
                                                            "image"     => "images/lot.png",
                                                            "nom"       => "Des merveilles",
                                                            "numero"    => "10276, 10266, 10283",
                                                            "age"       => "18+",
                                                            "prix"      => "799,99",
                                                            "quantite"  => "4"
                                                        ],
                                                        [
                                                            "image"     => "images/lot.png",
                                                            "nom"       => "L'aventure Minecraft",
                                                            "numero"    => "21189, 21172, 21185",
                                                            "age"       => "8+",
                                                            "prix"      => "79.99",
                                                            "quantite"  => "19"
                                                        ]
                                                    ],

                                "themeimage" => 
                                                [
                                                    "ninjago"           => "images/ninjago.png",
                                                    "icons"             => "images/icons.png",
                                                    "minecraft"          => "images/minecraft.png"
                                                ],

                                "themes" => 
                                            [
                                                "ninjago"               => [
                                                                            
                                                                            [   
                                                                                "image"     => "images/ninjago/samuraix.png",
                                                                                "nom"       => "Le robot Samuraï X de Nya",
                                                                                "numero"    => "71775",
                                                                                "nbpieces"  => "1003",
                                                                                "age"       => "10+",
                                                                                "prix"      => "119.99",
                                                                                "quantite"  => "8"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/ninjago/goldendrag.png",
                                                                                "nom"       => "L'ultra dragon d'or de Lloyd",
                                                                                "numero"    => "71774",
                                                                                "nbpieces"  => "989",
                                                                                "age"       => "9+",
                                                                                "prix"      => "149.99",
                                                                                "quantite"  => "6"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/ninjago/crystalking.jpg",
                                                                                "nom"       => "Le Roi de cristal",
                                                                                "numero"    => "71772",
                                                                                "nbpieces"  => "722",
                                                                                "age"       => "9+",
                                                                                "prix"      => "64.99",
                                                                                "quantite"  => "16"
                                                                            ]
                                                                        ],
                                                "icons"              => [ 

                                                                            [   
                                                                                "image"     => "images/icons/colosseum.jpg",
                                                                                "nom"       => "Le Colisée",
                                                                                "numero"    => "10276",
                                                                                "nbpieces"  => "9036",
                                                                                "age"       => "18+",
                                                                                "prix"      => "549.99",
                                                                                "quantite"  => "4"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/icons/lander.png",
                                                                                "nom"       => "NASA Apollo 11 Lunar Lander",
                                                                                "numero"    => "10266",
                                                                                "nbpieces"  => "1087",
                                                                                "age"       => "16+",
                                                                                "prix"      => "99.99",
                                                                                "quantite"  => "10"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/icons/spaceshuttle.png",
                                                                                "nom"       => "La navette spatiale Discovery de la NASA",
                                                                                "numero"    => "10283",
                                                                                "nbpieces"  => "2354",
                                                                                "age"       => "18+",
                                                                                "prix"      => "199.99",
                                                                                "quantite"  => "7"
                                                                            ]
                                                                        ],
                                                "minecraft"           => [ 

                                                                            [   
                                                                                "image"     => "images/minecraft/dungeon.jpg",
                                                                                "nom"       => "Le donjon du squelette",
                                                                                "numero"    => "21189",
                                                                                "nbpieces"  => "364",
                                                                                "age"       => "8+",
                                                                                "prix"      => "29.99",
                                                                                "quantite"  => "33"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/minecraft/portal.png",
                                                                                "nom"       => "Les ruines de portail",
                                                                                "numero"    => "21172",
                                                                                "nbpieces"  => "316",
                                                                                "age"       => "8+",
                                                                                "prix"      => "29.99",
                                                                                "quantite"  => "19"
                                                                            ],

                                                                            [   
                                                                                "image"     => "images/minecraft/bastion.jpg",
                                                                                "nom"       => "Le bastion du nether",
                                                                                "numero"    => "21185",
                                                                                "nbpieces"  => "300",
                                                                                "age"       => "8+",
                                                                                "prix"      => "34.99",
                                                                                "quantite"  => "26"
                                                                            ]
                                                                        ]

                                            ],
                        "horaires"      => [
                                                "lundi"         => "09:30 - 19:00",
                                                "mardi"         => "09:30 - 19:00",
                                                "mercredi"      => "09:30 - 19:00",
                                                "jeudi"         => "09:30 - 19:00",
                                                "vendredi"      => "09:30 - 19:00",
                                                "samedi"        => "09:30 - 19:00",
                                                "dimanche"      => "fermé"
                        ],

                        "map"           => "images/nantes.png",
                        "magasin"       => "images/boutiquenantes.jpg",
                        "coordonnees"   => "2 Rue Poterie",
                        "codepostal"    => "44000 - Nantes",
                        "tel"           => "02.54.83.05.56",

                        "personnel"     => [
                                                [
                                                    "photo"     => "images/girl.png",
                                                    "nom"       => "Eleonore",
                                                    "fonctions" => "Manager des ventes"
                                                ],

                                                [
                                                    "photo"     => "images/girl.png",
                                                    "nom"       => "Alyssa",
                                                    "fonctions" => "Vendeuse en magasin"
                                                ],

                                                [
                                                    "photo"     => "images/boy.jpg",
                                                    "nom"       => "Marcel",
                                                    "fonctions" => "Préparateur de commandes web"
                                                ],

                                                [
                                                    "photo"     => "images/girl.png",
                                                    "nom"       => "Tao",
                                                    "fonctions" => "Vendeuse en magasin"
                                                ]

                                            ],

                        "reseaux"       => [
                                                "twitter"   => "@Algo-LEGO_Nantes",
                                                "instagram" => "@Algo-LEGO_Nantes",
                                                "facebook"  => "@Algo-LEGO_Nantes"
                                            ]
                                ],
                ];

