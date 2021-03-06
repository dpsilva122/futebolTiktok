<!-- ===============================Timers================================= -->
<script>

/* Botão da Janela */
$(document).ready(function() {
    $("#hide1").hide();
    $("#hide2").hide();
    $("#hide3").hide();
    $("#hide4").hide();
    document.getElementById('video0').addEventListener("timeupdate", function() {
        if(this.currentTime > 8) {
            $("#hide1").show();
            $("#hide2").show();
            $("#hide3").show();
            $("#hide4").show();
        }
        if(this.currentTime > 15) {
            $("#hide1").hide();
            $("#hide2").hide();
            $("#hide3").hide();
            $("#hide4").hide();
        }
    });
});  

/* Botão EsquemaDefaultHome */
$(document).ready(function() {
    $("#esquemaDefault").hide();
    document.getElementById('video0').addEventListener("timeupdate", function() {
        if(this.currentTime > 30) {
            $("#esquemaDefault").show();
        }
        if(this.currentTime > 108) {
            $("#esquemaDefault").hide();
        }
    });
});

/* Botão EsquemaTatico sub-itens */
$(document).ready(function() {
    $("#hide5").hide();
    $("#hide6").hide();
    $("#hide7").hide();
    $("#hide8").hide();
    document.getElementById('video0').addEventListener("timeupdate", function() {
        if(this.currentTime > 30) {
            $("#hide5").show();
            $("#hide6").show();
            $("#hide7").show();
            $("#hide8").show();
        }
        if(this.currentTime > 34) {
            $("#hide5").hide();
            $("#hide6").hide();
            $("#hide7").hide();
            $("#hide8").hide();
        }
    });
});  

/* IMG JORNADA */
$(document).ready(function() {
    $("#imgjornada").hide();
    $("#linkPreparacao").hide();
    document.getElementById('video0').addEventListener("timeupdate", function() {
        if(this.currentTime > 117) {
            $("#imgjornada").show();
            $("#linkPreparacao").show();
        }
        if(this.currentTime > 118) {
            $("#imgjornada").hide();
            $("#linkPreparacao").hide();
        }
    });
}); 

/* GIF PRORROGACAO */
$(document).ready(function() {
    $("#gifgpror1").hide();
    document.getElementById('video0').addEventListener("timeupdate", function() {
        if(this.currentTime > 96) {
            $("#gifgpror1").show();
        }
        if(this.currentTime > 98) {
            $("#gifgpror1").hide();
        }
    });
}); 


/* GIF GRANDE FINAL */
$(document).ready(function() {
    $("#gifgfinal1").hide();
    $("#gifgfinal2").hide();
    $("#gifgfinal3").hide();
    document.getElementById('video0').addEventListener("timeupdate", function() {
        if(this.currentTime > 87) {
            $("#gifgfinal1").show();
            $("#gifgfinal2").show();
            $("#gifgfinal3").show();
        }
        if(this.currentTime > 90) {
            $("#gifgfinal1").hide();
            $("#gifgfinal2").hide();
            $("#gifgfinal3").hide();
        }
    });
}); 

/* GIF APOS O APITO */
$(document).ready(function() {
    $("#gifapos1").hide();
    $("#gifapos2").hide();
    $("#gifapos3").hide();
    $("#gifapos4").hide();
    $("#gifapos5").hide();
    $("#gifapos6").hide();
    $("#gifapos7").hide();
    $("#gifapos8").hide();
    $("#gifapos9").hide();
    $("#gifapos10").hide();
    $("#gifapos11").hide();
    $("#gifapos12").hide();
    $("#gifapos13").hide();
    $("#gifapos14").hide();
    document.getElementById('video0').addEventListener("timeupdate", function() {
        if(this.currentTime > 47) {
            $("#gifapos1").show();
            $("#gifapos2").show();
            $("#gifapos3").show();
            $("#gifapos4").show();
            $("#gifapos5").show();
            $("#gifapos6").show();
            $("#gifapos7").show();
            $("#gifapos8").show();
            $("#gifapos9").show();
            $("#gifapos10").show();
            $("#gifapos11").show();
            $("#gifapos12").show();
            $("#gifapos13").show();
            $("#gifapos14").show();
        }
        if(this.currentTime > 49.1) {
            $("#gifapos1").hide();
            $("#gifapos2").hide();
            $("#gifapos3").hide();
            $("#gifapos4").hide();
            $("#gifapos5").hide();
            $("#gifapos6").hide();
            $("#gifapos7").hide();
            $("#gifapos8").hide();
            $("#gifapos9").hide();
            $("#gifapos10").hide();
            $("#gifapos11").hide();
            $("#gifapos12").hide();
            $("#gifapos13").hide();
            $("#gifapos14").hide();
        }
    });
});  

/* GIF CONCENTRACAO */
$(document).ready(function() {
    $("#gifconc1").hide();
    $("#gifconc2").hide();
    $("#gifconc3").hide();
    $("#gifconc4").hide();
    document.getElementById('video0').addEventListener("timeupdate", function() {
        if(this.currentTime > 35) {
            $("#gifconc1").show();
            $("#gifconc2").show();
            $("#gifconc3").show();
            $("#gifconc4").show();
        }
        if(this.currentTime > 37.1) {
            $("#gifconc1").hide();
            $("#gifconc2").hide();
            $("#gifconc3").hide();
            $("#gifconc4").hide();
        }
    });
}); 

/* GIF PREPARACAO */
$(document).ready(function() {
    $("#gifprep1").hide();
    $("#gifprep2").hide();
    $("#gifprep3").hide();
    $("#gifprep4").hide();
    document.getElementById('video0').addEventListener("timeupdate", function() {
        if(this.currentTime > 18) {
            $("#gifprep1").show();
            $("#gifprep2").show();
            $("#gifprep3").show();
            $("#gifprep4").show();
        }
        if(this.currentTime > 25) {
            $("#gifprep1").hide();
            $("#gifprep2").hide();
            $("#gifprep3").hide();
            $("#gifprep4").hide();
        }
    });
}); 

// ------------------------ SEQUENCIA DO VIDEOZAO -----------------------

/* Parte 1 - Vai até o Onibus */
$(document).ready(function() {
//$("#p1").hide();
$("#p2").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 41 + 0.9 && this.currentTime < 42 + 0.1) {
$("#p1").show()
// document.getElementById("video1").visiblity="visible";
this.pause()
} 
if(this.currentTime > 44) {
$("#p1").hide()
}
});
});

$(document).ready(function() {
//$("#b1").hide();
$("#b2").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 41 + 0.9 && this.currentTime < 42 + 0.1) {
$("#b1").show()
}
if(this.currentTime > 44) {
$("#b1").hide()
$("#p2").show()
$("#b2").show()
}
});
});

/* Parte 2 - Vai até preparação */
$(document).ready(function() {
$("#p2").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 51 + 0.9 && this.currentTime < 52 + 0.1) {
$("#p2").show()
this.pause()
} 
if(this.currentTime > 54) {
$("#p2").hide()
}
});
});

$(document).ready(function() {
$("#b2").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 51 + 0.9 && this.currentTime < 52 + 0.1) {
$("#b2").show()
}
if(this.currentTime > 54) {
$("#b2").hide()
$("#p3").show()
$("#b3").show()
}
});
});

/* Parte 3 - Vai até Esquema tatico */
$(document).ready(function() {
$("#p3").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 59 + 0.9 && this.currentTime < 60 + 0.1) {
$("#p3").show()
this.pause()
} 
if(this.currentTime > 62) {
$("#p3").hide()
}
});
});

$(document).ready(function() {
$("#b3").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 59 + 0.9 && this.currentTime < 60 + 0.1) {
$("#b3").show()
}
if(this.currentTime > 62) {
$("#b3").hide()
$("#p4").show()
$("#b4").show()
}
});
});

/* Parte 4 - Vai até a página concentração */
$(document).ready(function() {
$("#p4").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 64 + 0.9 && this.currentTime < 65 + 0.1) {
$("#p4").show()
this.pause()
} 
if(this.currentTime > 67) {
$("#p4").hide()
}
});
});

$(document).ready(function() {
$("#b4").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 64 + 0.9 && this.currentTime < 65 + 0.1) {
$("#b4").show()
}
if(this.currentTime > 67) {
$("#b4").hide()
$("#p5").show()
$("#b5").show()
}
});
});

/* Parte 5 - Vai até Apos do Apito */
$(document).ready(function() {
$("#p5").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 68 + 0.9 && this.currentTime < 69 + 0.1) {
$("#p5").show()
this.pause()
} 
if(this.currentTime > 71) {
$("#p5").hide()
}
});
});

$(document).ready(function() {
$("#b5").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 68 + 0.9 && this.currentTime < 69 + 0.1) {
$("#b5").show()
}
if(this.currentTime > 71) {
$("#b5").hide()
$("#p6").show()
$("#b6").show()
}
});
});

/* Parte 6 - Vai até após o apito */
$(document).ready(function() {
$("#p6").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 76 + 0.9 && this.currentTime < 77 + 0.1) {
$("#p6").show()
this.pause()
} 
if(this.currentTime > 79) {
$("#p6").hide()
}
});
});

$(document).ready(function() {
$("#b6").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 76 + 0.9 && this.currentTime < 77 + 0.1) {
$("#b6").show()
}
if(this.currentTime > 79) {
$("#b6").hide()
$("#p7").show()
$("#b7").show()
}
});
});

/* Parte 7 - Vai até mesa triangular */
$(document).ready(function() {
$("#p7").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 82 + 0.9 && this.currentTime < 83 + 0.1) {
$("#p7").show()
this.pause()
} 
if(this.currentTime > 84) {
$("#p7").hide()
}
});
});

$(document).ready(function() {
$("#b7").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 82 + 0.9 && this.currentTime < 83 + 0.1) {
$("#b7").show()
}
if(this.currentTime > 84) {
$("#b7").hide()
$("#p8").show()
$("#b8").show()
}
});
});

/* Parte 8 - Vai até melhores momentos */
$(document).ready(function() {
$("#p8").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 90 + 0.9 && this.currentTime < 91 + 0.1) {
$("#p8").show()
this.pause()
} 
if(this.currentTime > 93) {
$("#p8").hide()
}
});
});

$(document).ready(function() {
$("#b8").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 90 + 0.9 && this.currentTime < 91 + 0.1) {
$("#b8").show()
}
if(this.currentTime > 93) {
$("#b8").hide()
$("#p9").show()
$("#b9").show()
}
});
});

/* Parte 9 - Vai até fut.live */
$(document).ready(function() {
$("#p9").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 95 + 0.9 && this.currentTime < 96 + 0.1) {
$("#p9").show()
this.pause()
} 
if(this.currentTime > 98) {
$("#p9").hide()
}
});
});

$(document).ready(function() {
$("#b9").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 95 + 0.9 && this.currentTime < 96 + 0.1) {
$("#b9").show()
}
if(this.currentTime > 98) {
$("#b9").hide()
$("#p10").show()
$("#b10").show()
}
});
});

/* Parte 10 - Vai até minuto esporte  */
$(document).ready(function() {
$("#p10").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 102 + 0.9 && this.currentTime < 103 + 0.1) {
$("#p10").show()
this.pause()
} 
if(this.currentTime > 105) {
$("#p10").hide()
}
});
});

$(document).ready(function() {
$("#b10").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 102 + 0.9 && this.currentTime < 103 + 0.1) {
$("#b10").show()
}
if(this.currentTime > 105) {
$("#b10").hide()
$("#p11").show()
$("#b11").show()
}
});
});

/* Parte 11 - Vai até reporter tiktok  */
$(document).ready(function() {
$("#p11").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 107 + 0.9 && this.currentTime < 108 + 0.1) {
$("#p11").show()
this.pause()
} 
if(this.currentTime > 110) {
$("#p11").hide()
}
});
});

$(document).ready(function() {
$("#b11").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 107 + 0.9 && this.currentTime < 108 + 0.1) {
$("#b11").show()
}
if(this.currentTime > 110) {
$("#b11").hide()
$("#p12").show()
$("#b12").show()
}
});
});

// Parte 12 - Vai até a grande final 
$(document).ready(function() {
$("#p12").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 116 + 0.9 && this.currentTime < 117 + 0.1) {
$("#p12").show()
this.pause()
} 
if(this.currentTime > 119) {
$("#p12").hide()
}
});
});

$(document).ready(function() {
$("#b12").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 116 + 0.9 && this.currentTime < 117 + 0.1) {
$("#b12").show()
}
if(this.currentTime > 119) {
$("#b12").hide()
$("#p13").show()
$("#b13").show()
}
});
});

// Parte 13 - Vai até a prorrogação
$(document).ready(function() {
$("#p13").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 125 + 0.9 && this.currentTime < 126 + 0.1) {
$("#p13").show()
this.pause()
} 
if(this.currentTime > 128) {
$("#p13").hide()
}
});
});

$(document).ready(function() {
$("#b13").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 125 + 0.9 && this.currentTime < 126 + 0.1) {
$("#b13").show()
}
if(this.currentTime > 128) {
$("#b13").hide()
$("#p14").show()
$("#b14").show()
}
});
});

// Parte 14 - Vai até futeboles 
$(document).ready(function() {
$("#p14").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 130 + 0.9 && this.currentTime < 131 + 0.1) {
$("#p14").show()
this.pause()
} 
if(this.currentTime > 133) {
$("#p14").hide()
}
});
});

$(document).ready(function() {
$("#b14").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 130 + 0.9 && this.currentTime < 131 + 0.1) {
$("#b14").show()
}
if(this.currentTime > 133) {
$("#b14").hide()
$("#p15").show()
$("#b15").show()
}
});
});

// Parte 15 - Vai até caiu na rede 
$(document).ready(function() {
$("#p15").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 135 + 0.9 && this.currentTime < 136 + 0.1) {
$("#p15").show()
this.pause()
} 
if(this.currentTime > 137) {
$("#p15").hide()
}
});
});

$(document).ready(function() {
$("#b15").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 135 + 0.9 && this.currentTime < 136 + 0.1) {
$("#b15").show()
}
if(this.currentTime > 137) {
$("#b15").hide()
$("#p16").show()
$("#b16").show()
}
});
});

// Parte 16 - Vai até oportunidades  
$(document).ready(function() {
$("#p16").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 142 + 0.9 && this.currentTime < 143 + 0.1) {
$("#p16").show()
this.pause()
} 
if(this.currentTime > 145) {
$("#p16").hide()
}
});
});

$(document).ready(function() {
$("#b16").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 142 + 0.9 && this.currentTime < 143 + 0.1) {
$("#b16").show()
}
if(this.currentTime > 144) {
$("#b16").hide()
$("#p17").show()
$("#b17").show()
}
});
});

// Parte 17 - Vai até jornada  
$(document).ready(function() {
$("#p17").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 152 + 0.9 && this.currentTime < 153 + 0.1) {
$("#p17").show()
this.pause()
} 
if(this.currentTime > 154) {
$("#p17").hide()
}
});
});

$(document).ready(function() {
$("#b17").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime >= 152 + 0.9 && this.currentTime < 153 + 0.1) {
$("#b17").show()
}
if(this.currentTime > 154) {
$("#b17").hide()
$("#p18").show()
$("#b18").show()
}
});
});
</script>