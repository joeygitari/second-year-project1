var subjectObject = {
    "Nairobi": {
        "Kempinski Villa Rosa": [37537],
        "Hemingways Nairobi": [39847],
        "Karen Gables": [25410],
        "City Lodge Hotel": [12980],
        "Nairobi Serena Hotel": [27431],
        "Fairmont The Norfolk": [22643],
        "Sankara Nairobi": [31887],
        "Movenpick Hotel and Residences": [22225],
        "Town Lodge": [21367],
        "Hilton Garden Inn": [17900],
        "Fairview Hotel": [19085],
        "Four Points By Sheraton": [18480],
        "Tribe Hotel": [27748],
        "Crowne Plaza": [18184],
        "Park Inn By Radisson": [18410],
        "Best Western Plus Meridian": [14692],
        "Trademark Hotel": [14784],
        "Sarova Panafric": [13860],
        "Sarova Stanley": [12012],
        "Tamarind Tree Hotel": [12474],
        "Eka Hotel": [11991],
        "Double Tree By Hilton": [11550],
        "Ole Sereni Hotel": [11550],
        "The Boma": [11991]
    },
    "Kisumu": {
        "Ciala Resort Hotels": [13974],
        "Imperial Hotel": [27258],
        "Acacia Premier Hotel": [17588],
        "Sovereign Hotel": [12058],
        "Best Western Kisumu Hotel": [11943],
        "The Vic Hotel": [11550],
        "The Grand Royal Swiss Hotel": [13040],
        "Pinecone Hotel": [11550],
        "Jumuia Hotel": [7143]
    },
    "Mombasa": {
        "Sarova Whitesands Beach Resort And Spa": [38661],
        "PrideInn Paradise Beach Resort And Spa": [26734],
        "Travellers Beach Hotel": [69300],
        "Serena Beach Resort And Spa": [26707],
        "Voyager Beach Resort": [19288],
        "Hotel Englishpoint And Spa": [19519],
        "Severin Sea Lodge": [9684],
        "Sun Africa Beach Hotel And Spa": [9252],
        "Sultan Palace": [7923]
    },
    "Lamu": {
        "The Majilis Resort": [46893],
        "The Red Pepper House": [58905],
        "Manda Bay": [34650],
        "Kizingo Beach Eco Lodge": [18757],
        "Kijani Hotel": [34650],
        "Banana House And Wellness Centre": [11550]
    },
    "Diani": {
        "Zubeida Boutique Resort": [375490],
        "Waterlovers Beach Resort": [68607],
        "Eleven Pearl Hotel And Spa": [46893],
        "Pinewood Beach Resort And Spa": [28066],
        "Searenity Beach Villa": [24418],
        "Baobab Beach Resort And Spa": [19519],
        "Leisure Lodge Beach And Golf Resort": [21622],
        "Neptune Paradise Beach Resort And Spa": [18105],
        "Diani Sea Lodge": [17005],
        "Jacaranda Indian Ocean Beach Resort": [12297],
        "Swahili Beach Resort": [17310],
        "Papillon Lagoon Reef Hotel": [10253]
    },
    "Malindi": {
        "Billionaire Resort And Retreat": [74266],
        "Hemingways Watamu": [30607],
        "Medina Palms Watamu": [54054],
        "Leopard Point Luxury Beach Resort And Spa": [45853],
        "Lion In The Sun Billionaire Retreat Malindi": [32455],
        "White Elephant Sea Lodge": [17152],
        "Ocean Beach Resort And Spa": [18353],
        "Visiwa Beach Resort": [12162],
        "Turtle Bay Beach Club": [11319]
    },
    "Taita": {
        "Salt Lick Safari Lodge": [18364],
        "Maneaters Tsavo": [27720],
        "Kilaguni Serena Safari Lodge": [18133],
        "Manyatta Camp": [16747],
        "Taita Hills Safari Resort And Spa": [14322],
        "Voi Wildlife Lodge": [12474]
    },
    "Central Kenya": {
        "Sweetwaters Serena Camp": [16747],
        "Ole Samara Suites": [13513],
        "Alba Hotel": [13964],
        "Aberdare Prestige And Royal Cottages": [11319],
        "Sovereign Suites": [9355],
        "The Warwick Hotel": [8344]
    },
    "Rift Valley": {
        "Angama Mara": [69270],
        "Sarova Lion Hill Game Lodge": [27720],
        "Enashipai Resort And Spa": [23677],
        "Olare Mara Kempinski": [95865],
        "Sarova Woodlands Hotel And Spa": [14784],
        "The Great Rift Valley Lodge And Golf Resort": [24601],
        "Sarova Mara Game Park": [38116],
        "Mara Intrepids Tented Camp": [64075],
        "Neptune Mara Rianta Luxury Camp": [34303],
        "Honeymoon Hut": [19231],
        "Entim Mara": [19500],
        "Desert Rose": [19500]
    },

}

window.onload = function() {
    var subjectSel = document.getElementById("subject");
    var objectSel = document.getElementById("object");
    var priceSel = document.getElementById("price");
    for (var x in subjectObject) {
        subjectSel.options[subjectSel.options.length] = new Option(x, x);
    }
    subjectSel.onchange = function() {

        priceSel.length = 1;
        objectSel.length = 1;

        for (var y in subjectObject[this.value]) {
            objectSel.options[objectSel.options.length] = new Option(y, y);
        }
    }
    objectSel.onchange = function() {

        priceSel.length = 1;

        var z = subjectObject[subjectSel.value][this.value];
        for (var i = 0; i < z.length; i++) {
            priceSel.options[priceSel.options.length] = new Option(z[i], z[i]);
        }
    }
}