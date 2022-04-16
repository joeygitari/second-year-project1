var subjectObject = {
    "Nairobi": {
        "Kempinski Villa Rosa": [],
        "Hemingways Nairobi": [],
        "Karen Gables": [],
        "City Lodge Hotel": [],
        "Nairobi Serena Hotel": [],
        "Fairmont The Norfolk": [],
        "Sankara Nairobi": [],
        "Movenpick Hotel and Residences": [],
        "Town Lodge": [],
        "Hilton Garden Inn": [],
        "Fairview Hotel": [],
        "Four Points By Sheraton": [],
        "Tribe Hotel": [],
        "Crowne Plaza": [],
        "Park Inn By Radisson": [],
        "Best Western Plus Meridian": [],
        "Trademark Hotel": [],
        "Sarova Panafric": [],
        "Sarova Stanley": [],
        "Tamarind Tree Hotel": [],
        "Eka Hotel": [],
        "Double Tree By Hilton": [],
        "Ole Sereni Hotel": [],
        "The Boma": []
    },
    "Kisumu": {
        "Ciala Resort Hotels": [],
        "Imperial Hotel": [],
        "Acacia Premier Hotel": [],
        "Sovereign Hotel": [],
        "Best Western Kisumu Hotel": [],
        "The Vic Hotel": [],
        "The Grand Royal Swiss Hotel": [],
        "Pinecone Hotel": [],
        "Jumuia Hotel": []
    },
    "Mombasa": {
        "Sarova Whitesands Beach Resort And Spa": [],
        "PrideInn Paradise Beach Resort And Spa": [],
        "Travellers Beach Hotel": [],
        "Serena Beach Resort And Spa": [],
        "Voyager Beach Resort": [],
        "Hotel Englishpoint And Spa": [],
        "Severin Sea Lodge": [],
        "Sun Africa Beach Hotel And Spa": [],
        "Sultan Palace": []
    },
    "Lamu": {
        "The Majilis Resort": [],
        "The Red Pepper House": [],
        "Manda Bay": [],
        "Kizingo Beach Eco Lodge": [],
        "Kijani Hotel": [],
        "Banana House And Wellness Centre": []
    },
    "Diani": {
        "Zubeida Boutique Resort": [],
        "Waterlovers Beach Resort": [],
        "Eleven Pearl Hotel And Spa": [],
        "Pinewood Beach Resort And Spa": [],
        "Searenity Beach Villa": [],
        "Baobab Beach Resort And Spa": [],
        "Leisure Lodge Beach And Golf Resort": [],
        "Neptune Paradise Beach Resort And Spa": [],
        "Diani Sea Lodge": [],
        "Jacaranda Indian Ocean Beach Resort": [],
        "Swahili Beach Resort": [],
        "Papillon Lagoon Reef Hotel": []
    },
    "Malindi": {
        "Billionaire Resort And Retreat": [],
        "Hemingways Watamu": [],
        "Medina Palms Watamu": [],
        "Leopard Point Luxury Beach Resort And Spa": [],
        "Lion In The Sun Billionaire Retreat Malindi": [],
        "White Elephant Sea Lodge": [],
        "Ocean Beach Resort And Spa": [],
        "Visiwa Beach Resort": [],
        "Turtle Bay Beach Club": []
    },
    "Taita": {
        "Salt Lick Safari Lodge": [],
        "Maneaters Tsavo": [],
        "Kilaguni Serena Safari Lodge": [],
        "Manyatta Camp": [],
        "Taita Hills Safari Resort And Spa": [],
        "Voi Wildlife Lodge": []
    },
    "Central Kenya": {
        "Sweetwaters Serena Camp": [],
        "Ole Samara Suites": [],
        "Alba Hotel": [],
        "Aberdare Prestige And Royal Cottages": [],
        "Sovereign Suites": [],
        "The Warwick Hotel": []
    },
    "Rift Valley": {
        "Angama Mara": [],
        "Sarova Lion Hill Game Lodge": [],
        "Enashipai Resort And Spa": [],
        "Olare Mara Kempinski": [],
        "Sarova Woodlands Hotel And Spa": [],
        "The Great Rift Valley Lodge And Golf Resort": [],
        "Sarova Mara Game Park": [],
        "Mara Intrepids Tented Camp": [],
        "Neptune Mara Rianta Luxury Camp": [],
        "Honeymoon Hut": [],
        "Entim Mara": [],
        "Desert Rose": []
    },

}
window.onload = function() {
    var subjectSel = document.getElementById("subject");
    var objectSel = document.getElementById("object");
    for (var x in subjectObject) {
        subjectSel.options[subjectSel.options.length] = new Option(x, x);
    }
    subjectSel.onchange = function() {


        objectSel.length = 1;
        for (var y in subjectObject[this.value]) {
            objectSel.options[objectSel.options.length] = new Option(y, y);
        }
    }

}