﻿// Created 12/11/2013 12:56:11 PM
function generateDOM(){el.createElement("div",{id:"bgDiv"},"body");el.createElement("div",{id:"mainFrame","class":"mainFrame"},"body");var c=el.createElement("aside",{id:"topToolbar","class":"toolbar horizontalToolbar topToolbar hidden"}),a=el.createElement("div",{id:"infoField","class":"buttonsField horizontalField leftField infoField"}),b=el.createElement("div",{id:"infoButton","class":"button infoButton"});a.appendChild(b);c.appendChild(a);if(publicationData.visibility.toc||publicationData.visibility.bookmarks){var a=
el.createElement("div",{id:"listField","class":"buttonsField horizontalField leftField listField"}),b=el.createElement("div",{id:"listButton","class":"button listButton"});a.appendChild(b);c.appendChild(a)}publicationData.shopInfo&&publicationData.shopInfo.usePublicationCart&&(a=el.createElement("div",{id:"cartField","class":"buttonsField horizontalField leftField cartField"}),b=el.createElement("div",{id:"cartButton","class":"button cartButton"}),a.appendChild(b),c.appendChild(a));publicationData.visibility.downloads&&
(a=el.createElement("div",{id:"downloadField","class":"buttonsField horizontalField rightField downloadField"}),b=el.createElement("div",{id:"downloadButton","class":"button downloadButton"}),a.appendChild(b),c.appendChild(a));publicationData.visibility.share&&(a=el.createElement("div",{id:"shareField","class":"buttonsField horizontalField rightField shareField"}),b=el.createElement("div",{id:"shareButton","class":"button shareButton"}),a.appendChild(b),c.appendChild(a));publicationData.visibility.bookmarks&&
(a=el.createElement("div",{id:"addField","class":"buttonsField horizontalField rightField addField"}),b=el.createElement("div",{id:"addButton","class":"button addButton"}),a.appendChild(b),c.appendChild(a));publicationData.visibility.search&&(a=el.createElement("div",{id:"searchField","class":"buttonsField horizontalField rightField searchField"}),b=el.createElement("div",{id:"searchButton","class":"button searchButton"}),a.appendChild(b),c.appendChild(a));document.getElementById("body").appendChild(c);
c=el.createElement("aside",{id:"pagerToolbar","class":"toolbar horizontalToolbar bottomToolbar pagerToolbar hidden"});publicationData.visibility.slideshow&&(a=el.createElement("div",{id:"slideShowField","class":"buttonsField horizontalField leftField slideShowField"}),b=el.createElement("div",{id:"slideShowButton","class":"button slideShowButton"}),a.appendChild(b),c.appendChild(a));a=el.createElement("div",{id:"pagerField","class":"horizontalField rightField pagerField"});b=el.createElement("div",
{id:"pagerCurrentPage","class":"pagerFont"});a.appendChild(b);b=el.createElement("input",{id:"inputPage","class":"inputPage ableSelectText ableEditText invisible",type:"text"});a.appendChild(b);b=el.createElement("div",{id:"lastPage","class":"pagerFont"});a.appendChild(b);c.appendChild(a);var a=el.createElement("div",{id:"sliderField","class":"horizontalField sliderField"}),b=el.createElement("div",{id:"sliderBar","class":"sliderBar"}),d=el.createElement("div",{id:"sliderThumb","class":"sliderThumb"});
b.appendChild(d);a.appendChild(b);c.appendChild(a);document.getElementById("body").appendChild(c);publicationData.visibility.search&&(c=el.createElement("aside",{id:"searchToolbar","class":"toolbar horizontalToolbar bottomToolbar searchToolbar hidden"}),a=el.createElement("div",{id:"prevResultField","class":"buttonsField horizontalField leftField prevResultField"}),b=el.createElement("div",{id:"prevResultButton","class":"button prevResultButton"}),a.appendChild(b),c.appendChild(a),a=el.createElement("div",
{id:"resultField","class":"horizontalField resultField"}),c.appendChild(a),a=el.createElement("div",{id:"closeResultField","class":"buttonsField horizontalField leftField closeResultField"}),b=el.createElement("div",{id:"closeResultButton","class":"button closeResultButton"}),a.appendChild(b),c.appendChild(a),a=el.createElement("div",{id:"nextResultField","class":"buttonsField horizontalField leftField nextResultField"}),b=el.createElement("div",{id:"nextResultButton","class":"button nextResultButton"}),
a.appendChild(b),c.appendChild(a),document.getElementById("body").appendChild(c))};
