
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
    
      ,{"item" : "page17", "title" : "32",  "src" : "../flash/pages/page0017_s.jpg"}
    
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
  