// Valores Iniciais
    // points = "a=197","b=325" "c=99","d=268" "e=99","f=155" "g=197","h=98" "i=295","j=155" "k=295","l=268"
    var a,b,c,d,e,f,g,h,i,j,k,l = 0; 
    a = 306;
    b = 531; // Int Baixo
    c = 175;
    d = 455;
    e = 175;
    f = 304;
    g = 306;
    h = 229; // STR topo
    i = 436;
    j = 304;
    k = 436;
    l = 455;

        stat_str = 5;
        stat_agi = 5;
        stat_vit = 5;
        stat_inte = 5;
        stat_dex = 5;
        stat_luk = 5;

    $(document).ready(function() {
        $(".button").click(function() {
            mySound.load().play();
        });

        $("#char-select-list a").click(function() {
            $("#char-select-list a").removeClass("active");
            $(this).toggleClass("active");
        });

        $("button.btnstr").click(function() {
            if (stat_str < 9){
                $("#poligon").attr("points", a+","+(b=b-25.5)+" "+c+","+d+" "+e+","+f+" "+g+","+(h=h-25.5)+" "+i+","+j+" "+k+","+l); 
                    $('#stat_str').html(stat_str+=1);
                    $('#stat_inte').html(stat_inte-=1);
                    return false;
            }
            else{
                $("#poligon").attr("points", a+","+b+" "+c+","+d+" "+e+","+f+" "+g+","+h+" "+i+","+j+" "+k+","+l); 
            }
        });

        $("button.btnvit").click(function() {
            if (stat_vit < 9){
                $("#poligon").attr("points", a+","+b+" "+(c=c+21.5)+","+(d=d-15.5)+" "+e+","+f+" "+g+","+h+" "+(i=i+21.5)+","+(j=j-15.5)+" "+k+","+l);
                $('#stat_vit').html(stat_vit+=1);
                $('#stat_dex').html(stat_dex-=1);
                return false;
            }
            else{
                    $("#poligon").attr("points", a+","+b+" "+c+","+d+" "+e+","+f+" "+g+","+h+" "+i+","+j+" "+k+","+l); 
                }
        });

        $("button.btnluk").click(function() {
            if (stat_luk < 9){
                $("#poligon").attr("points", a+","+b+" "+c+","+d+" "+(e=e+21.5)+","+(f=f+15.5)+" "+g+","+h+" "+i+","+j+" "+(k=k+21.5)+","+(l=l+15.5));
                $('#stat_luk').html(stat_luk+=1);
                $('#stat_agi').html(stat_agi-=1);
                return false;
            }
            else{
                    $("#poligon").attr("points", a+","+b+" "+c+","+d+" "+e+","+f+" "+g+","+h+" "+i+","+j+" "+k+","+l); 
                }
        });

        $("button.btnint").click(function() {
            if (stat_inte < 9){
                $("#poligon").attr("points", a+","+(b=b+25.5)+" "+c+","+d+" "+e+","+f+" "+g+","+(h=h+25.5)+" "+i+","+j+" "+k+","+l);
                $('#stat_inte').html(stat_inte+=1);
                $('#stat_str').html(stat_str-=1);
                return false;
            }
            else{
                    $("#poligon").attr("points", a+","+b+" "+c+","+d+" "+e+","+f+" "+g+","+h+" "+i+","+j+" "+k+","+l); 
                }
        });

        $("button.btndex").click(function() {
            if (stat_dex < 9){
                $("#poligon").attr("points", a+","+b+" "+(c=c-21.5)+","+(d=d+15.5)+" "+e+","+f+" "+g+","+h+" "+(i=i-21.5)+","+(j=j+15.5)+" "+k+","+l);
                $('#stat_dex').html(stat_dex+=1);
                $('#stat_vit').html(stat_vit-=1);
                return false;
            }
            else{
                    $("#poligon").attr("points", a+","+b+" "+c+","+d+" "+e+","+f+" "+g+","+h+" "+i+","+j+" "+k+","+l); 
                }
        });

        $("button.btnagi").click(function() {
            if (stat_agi < 9){
                $("#poligon").attr("points", a+","+b+" "+c+","+d+" "+(e=e-21.5)+","+(f=f-15.5)+" "+g+","+h+" "+i+","+j+" "+(k=k-21.5)+","+(l=l-15.5));
                $('#stat_agi').html(stat_agi+=1);
                $('#stat_luk').html(stat_luk-=1);
                return false;
            }
            else{
                    $("#poligon").attr("points", a+","+b+" "+c+","+d+" "+e+","+f+" "+g+","+h+" "+i+","+j+" "+k+","+l); 
                }
        });

        /* Comportamento do Chat*/

        $(".chat-abas li.global").click(function() {
            $(".chat-abas li").removeClass("active");
            $(this).addClass(" active");

            $("#public").removeClass(" hidden");
            $("#party").addClass(" hidden");
            $("#guild").addClass(" hidden");
        });

        $(".chat-abas li.grupo").click(function() {
            $(".chat-abas li").removeClass("active");
            $(this).addClass(" active");

            $("#party").removeClass(" hidden");
            $("#public").addClass(" hidden");
            $("#guild").addClass(" hidden");
        });

        $(".chat-abas li.guilda").click(function() {
            $(".chat-abas li").removeClass("active");
            $(this).addClass(" active");

            $("#guild").removeClass(" hidden");
            $("#party").addClass(" hidden");
            $("#public").addClass(" hidden");
        });



        

        /* Comportamento da janela de skills*/

        $(".btn-info-skill").click(function hideskill() {
            $(".skills-class-select").toggleClass( "hidden");
            return false;
        });
        $(".skill-bottom .close").click(function hideskill() {
            $(".skills-class-select").toggleClass( "hidden");
            return false;
        });
        

        $(".job-select-skill .classe1").click(function() {
            $(".job-select-skill ul li a").removeClass("active");
            $(this).addClass(" active");

            $("#classe1").removeClass(" hidden");
            $("#classe2").addClass(" hidden");
            $("#classe3").addClass(" hidden");
            return  false;
        });

        $(".job-select-skill .classe2").click(function() {
            $(".job-select-skill ul li a").removeClass("active");
            $(this).addClass(" active");

            $("#classe2").removeClass(" hidden");
            $("#classe1").addClass(" hidden");
            $("#classe3").addClass(" hidden");
            return  false;
        });

        $(".job-select-skill .classe3").click(function() {
            $(".job-select-skill ul li a").removeClass("active");
            $(this).addClass(" active");

            $("#classe3").removeClass(" hidden");
            $("#classe2").addClass(" hidden");
            $("#classe1").addClass(" hidden");
            return  false;
        });


    });

