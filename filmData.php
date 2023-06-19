<?php

$movies = [
    new Movie(
        'Ant-Man and the Wasp: Quantumania',
        'English',
        2023,
        [
            new Genres('Azione', "'Film d'azione' si riferisce piuttosto a un genere hollywoodiano diffusosi negli ultimi vent'anni del 20° sec., e caratterizzato dal conflitto manicheo e violento tra un eroe positivo e atletico e diversi antagonisti, anch'essi atletici e spesso dotati di una considerevole forza tecnologica.", 1),
            new Genres('Fantascienza', 'Questo genere di film viene ambientato in un contesto legato a una visione più o meno lontana del futuro, come quello dei viaggi interstellari, quello del contatto con entità extraterrestri, quello dei conflitti nucleari o delle catastrofi climatiche globali.', 2),
            new Genres('Avventura', "Genere cinematografico destinato al divertimento e all'evasione, basato sul racconto di imprese rischiose e piene di imprevisti, inserite all'interno di viaggi in luoghi misteriosi e irti di pericoli.", 3),
        ]
    ),
];
