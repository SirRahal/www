﻿
    pageList = [{}
    
      ,{"item" : "page1", "title" : "1",  "src" : "../flash/pages/page0001_s.jpg"}
    
      ,{"item" : "page2", "title" : "2-3",  "src" : "../flash/pages/page0002_s.jpg"}
    
      ,{"item" : "page3", "title" : "4-5",  "src" : "../flash/pages/page0003_s.jpg"}
    
      ,{"item" : "page4", "title" : "6-7",  "src" : "../flash/pages/page0004_s.jpg"}
    
      ,{"item" : "page5", "title" : "8-9",  "src" : "../flash/pages/page0005_s.jpg"}
    
      ,{"item" : "page6", "title" : "10-11",  "src" : "../flash/pages/page0006_s.jpg"}
    
      ,{"item" : "page7", "title" : "12-13",  "src" : "../flash/pages/page0007_s.jpg"}
    
      ,{"item" : "page8", "title" : "14-15",  "src" : "../flash/pages/page0008_s.jpg"}
    
      ,{"item" : "page9", "title" : "16-17",  "src" : "../flash/pages/page0009_s.jpg"}
    
      ,{"item" : "page10", "title" : "18-19",  "src" : "../flash/pages/page0010_s.jpg"}
    
      ,{"item" : "page11", "title" : "20-21",  "src" : "../flash/pages/page0011_s.jpg"}
    
      ,{"item" : "page12", "title" : "22-23",  "src" : "../flash/pages/page0012_s.jpg"}
    
      ,{"item" : "page13", "title" : "24-25",  "src" : "../flash/pages/page0013_s.jpg"}
    
      ,{"item" : "page14", "title" : "26-27",  "src" : "../flash/pages/page0014_s.jpg"}
    
      ,{"item" : "page15", "title" : "28-29",  "src" : "../flash/pages/page0015_s.jpg"}
    
      ,{"item" : "page16", "title" : "30-31",  "src" : "../flash/pages/page0016_s.jpg"}
    
      ,{"item" : "page17", "title" : "32-33",  "src" : "../flash/pages/page0017_s.jpg"}
    
      ,{"item" : "page18", "title" : "34-35",  "src" : "../flash/pages/page0018_s.jpg"}
    
      ,{"item" : "page19", "title" : "36-37",  "src" : "../flash/pages/page0019_s.jpg"}
    
      ,{"item" : "page20", "title" : "38-39",  "src" : "../flash/pages/page0020_s.jpg"}
    
      ,{"item" : "page21", "title" : "40-41",  "src" : "../flash/pages/page0021_s.jpg"}
    
      ,{"item" : "page22", "title" : "42-43",  "src" : "../flash/pages/page0022_s.jpg"}
    
      ,{"item" : "page23", "title" : "44-45",  "src" : "../flash/pages/page0023_s.jpg"}
    
      ,{"item" : "page24", "title" : "46-47",  "src" : "../flash/pages/page0024_s.jpg"}
    
      ,{"item" : "page25", "title" : "48-49",  "src" : "../flash/pages/page0025_s.jpg"}
    
      ,{"item" : "page26", "title" : "50-51",  "src" : "../flash/pages/page0026_s.jpg"}
    
      ,{"item" : "page27", "title" : "52-53",  "src" : "../flash/pages/page0027_s.jpg"}
    
      ,{"item" : "page28", "title" : "54-55",  "src" : "../flash/pages/page0028_s.jpg"}
    
      ,{"item" : "page29", "title" : "56-57",  "src" : "../flash/pages/page0029_s.jpg"}
    
      ,{"item" : "page30", "title" : "58-59",  "src" : "../flash/pages/page0030_s.jpg"}
    
      ,{"item" : "page31", "title" : "60-61",  "src" : "../flash/pages/page0031_s.jpg"}
    
      ,{"item" : "page32", "title" : "62-63",  "src" : "../flash/pages/page0032_s.jpg"}
    
      ,{"item" : "page33", "title" : "64-65",  "src" : "../flash/pages/page0033_s.jpg"}
    
      ,{"item" : "page34", "title" : "66-67",  "src" : "../flash/pages/page0034_s.jpg"}
    
      ,{"item" : "page35", "title" : "68",  "src" : "../flash/pages/page0035_s.jpg"}
    
    ]

    function getPageTmb(num){
      var  i=1;
      var src=false;
      while(pageList[i]){
        if(pageList[i].title == num) {
          src = pageList[i].src;
          break;
        }
        i++;
      }
      return src;
    }
     function getSrcByTmbName(num){
        var  i=1;
        var src=false;
        while(pageList[i]){
            if(pageList[i].item == num) {
                src = pageList[i].src;
                break;
            }
            i++;
        }
        return src;
    }
       
  	function getPageSeo(num){
      var  i=1;
      var item=false;
      while(pageList[i]){
        if(pageList[i].title == num) {
          item = pageList[i].item;
          break;
        }
        i++;
      }
      return item;
    }
  