
  function myFunction(x, y)
  {
    var code = document.getElementById(y);
    switch(x)
    {
      case "English" : code.value=301; 
                       var del = document.getElementsByClassName("English");
                       while(del[0])
                       {
                          del[0].parentNode.removeChild(del[0]);
                       }
                       break;
      case "Physics" : code.value=041;
                       var del = document.getElementsByClassName("Physics");
                       while(del[0])
                       {
                          del[0].parentNode.removeChild(del[0]);
                       }
                       break;
      case "Chemistry" : code.value=042;
                         var del = document.getElementsByClassName("Chemistry");
                         while(del[0])
                         {
                           del[0].parentNode.removeChild(del[0]);
                         }
                         break;
      case "Mathematics" : code.value=308; 
                           var del = document.getElementsByClassName("Mathematics");
                           while(del[0])
                           {
                             del[0].parentNode.removeChild(del[0]);
                           }
                           break;
      case "Computer Science" : code.value=083;
                                var del = document.getElementsByClassName("Computer Science");
                                while(del[0])
                                {
                                   del[0].parentNode.removeChild(del[0]);
                                }
                                break;
      case "Business Studies" : code.value=400;
                                var del = document.getElementsByClassName("Business Studies");
                                while(del[0])
                                {
                                  del[0].parentNode.removeChild(del[0]);
                                }
                                break;
      case "Economics" : code.value=502; 
                         var del = document.getElementsByClassName("Economics");
                         while(del[0])
                         {
                           del[0].parentNode.removeChild(del[0]);
                         }
                         break;
      case "Accounts" : code.value=501; 
                        var del = document.getElementsByClassName("Accounts");
                        while(del[0])
                        {
                           del[0].parentNode.removeChild(del[0]);
                        }
                        break;
    }    
  }
  function grade(t,y,z)
  {
     var words = document.getElementById(y);
     var grade = document.getElementById(z);
     var x = parseInt(t);
     if(x<=100)
     {
       if(x>=90)
       {
         grade.value="A";
       }
       else if(x>=80&&x<90)
       {
         grade.value="B";
       }
       else if(x>=70&&x<80)
       {
         grade.value="C";
       }
       else if(x>=60&&x<70)
       {
         grade.value="D";
       }
       else 
       {
         grade.value="E";
       }
     }
     else 
     {
       grade.value="enter marks <100";
     }
   }
   
   /*function convertToWords(x)
   {
     alert("inside");
     var units1 = ["zero","one","two","three","four","five","six","seven","eight","nine","ten","eleven","twelve","thirteen","forteen","fifteen","sixteen","seventeen","eighteen,"nineteen"];
     var tens1 = [" "," ","twenty","thirty","forty","fifty","sixty","seventy","eighty","ninety","hundred"];
     if(x<19)
     {
       return(units1[x]+" "); alert(units1[x]+" ");
     }
     else if(x>19&&x<100)
     {
       if(x%10==0)
       {
         return(tens1[x/10]+" "); alert(tens1[x/10]+" ");
       }
       else
       {
         return(tens1[x/10]+" "+units1[x%10]); alert(tens1[x/10]+" "+units1[x%10]);
       }
     }
     else if(x==100)
     {
       return(tens1[10]+""); alert(tens1[10]+"");
     }
   }*/