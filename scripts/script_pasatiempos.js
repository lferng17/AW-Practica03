var npistas = 3;
var primeraCargaBol = true;
var palabras = [];
var letras = [];
for (o = 0; o < 60; o++) {
    letras[o] = '';
    document.getElementById('value' + (o + 1)).value = '';
}
var bolCookies = confirm('¿Quieres aceptar las cookies para guardar tu resultado parcial?');
cargar();


var diccionario = [];
function actualizar0() {
    letras[0] = document.getElementById("value1").value;
    letras[1] = document.getElementById("value2").value;
    letras[2] = document.getElementById("value3").value;
    letras[3] = document.getElementById("value4").value;
    arr0 = [letras[0], letras[1], letras[2], letras[3]];
    palabras[0] = arr0;
    buscarDiccionario(arr0);
    if (bolCookies)
        guardar();
}

function actualizar1() {
    letras[4] = document.getElementById("value5").value;
    letras[5] = document.getElementById("value6").value;
    letras[6] = document.getElementById("value7").value;
    letras[7] = document.getElementById("value8").value;
    arr = [letras[4], letras[5], letras[6], letras[7]];
    palabras[1] = arr;
    buscarDiccionario(arr);
    if (bolCookies)
        guardar();
}
function actualizar2() {
    letras[8] = document.getElementById("value9").value;
    letras[9] = document.getElementById("value10").value;
    letras[10] = document.getElementById("value11").value;
    letras[11] = document.getElementById("value12").value;
    arr = [letras[8], letras[9], letras[10], letras[11]];
    palabras[2] = arr;
    buscarDiccionario(arr);
    if (bolCookies)
        guardar();
}
function actualizar3() {
    letras[12] = document.getElementById("value13").value;
    letras[13] = document.getElementById("value14").value;
    letras[14] = document.getElementById("value15").value;
    letras[15] = document.getElementById("value16").value;
    arr = [letras[12], letras[13], letras[14], letras[15]];
    palabras[3] = arr;
    buscarDiccionario(arr);
    if (bolCookies)
        guardar();
}
function actualizar4() {
    letras[16] = document.getElementById("value17").value;
    letras[17] = document.getElementById("value18").value;
    letras[18] = document.getElementById("value19").value;
    letras[19] = document.getElementById("value20").value;
    arr = [letras[16], letras[17], letras[18], letras[19]];
    palabras[4] = arr;
    buscarDiccionario(arr);
    if (bolCookies)
        guardar();
}
function actualizar5() {
    letras[20] = document.getElementById("value21").value;
    letras[21] = document.getElementById("value22").value;
    letras[22] = document.getElementById("value23").value;
    letras[23] = document.getElementById("value24").value;
    arr = [letras[20], letras[21], letras[22], letras[23]];
    palabras[5] = arr;
    buscarDiccionario(arr);
    if (bolCookies)
        guardar();
}
function actualizar6() {
    letras[24] = document.getElementById("value25").value;
    letras[25] = document.getElementById("value26").value;
    letras[26] = document.getElementById("value27").value;
    letras[27] = document.getElementById("value28").value;
    letras[28] = document.getElementById("value29").value;
    letras[29] = document.getElementById("value30").value;
    arr = [letras[24], letras[25], letras[26], letras[27], letras[28], letras[29]];
    palabras[6] = arr;
    buscarDiccionario(arr);
    if (bolCookies)
        guardar();
}
function actualizar7() {
    letras[30] = document.getElementById("value31").value;
    letras[31] = document.getElementById("value32").value;
    letras[32] = document.getElementById("value33").value;
    letras[33] = document.getElementById("value34").value;
    letras[34] = document.getElementById("value35").value;
    letras[35] = document.getElementById("value36").value;
    arr = [letras[30], letras[31], letras[32], letras[33], letras[34], letras[35]];
    palabras[7] = arr;
    buscarDiccionario(arr);
    if (bolCookies)
        guardar();
}
function actualizar8() {
    letras[36] = document.getElementById("value37").value;
    letras[37] = document.getElementById("value38").value;
    letras[38] = document.getElementById("value39").value;
    letras[39] = document.getElementById("value40").value;
    letras[40] = document.getElementById("value41").value;
    letras[41] = document.getElementById("value42").value;
    arr = [letras[36], letras[37], letras[38], letras[39], letras[40], letras[41]];
    palabras[8] = arr;
    buscarDiccionario(arr);
    if (bolCookies)
        guardar();
}
function actualizar9() {
    letras[42] = document.getElementById("value43").value;
    letras[43] = document.getElementById("value44").value;
    letras[44] = document.getElementById("value45").value;
    letras[45] = document.getElementById("value46").value;
    letras[46] = document.getElementById("value47").value;
    letras[47] = document.getElementById("value48").value;
    arr = [letras[42], letras[43], letras[44], letras[45], letras[46], letras[47]];
    palabras[9] = arr;
    buscarDiccionario(arr);
    if (bolCookies)
        guardar();
}
function actualizar10() {
    letras[48] = document.getElementById("value49").value;
    letras[49] = document.getElementById("value50").value;
    letras[50] = document.getElementById("value51").value;
    letras[51] = document.getElementById("value52").value;
    letras[52] = document.getElementById("value53").value;
    letras[53] = document.getElementById("value54").value;
    arr = [letras[48], letras[49], letras[50], letras[51], letras[52], letras[53]];
    palabras[10] = arr;
    buscarDiccionario(arr);
    if (bolCookies)
        guardar();
}
function actualizar11() {
    letras[54] = document.getElementById("value55").value;
    letras[55] = document.getElementById("value56").value;
    letras[56] = document.getElementById("value57").value;
    letras[57] = document.getElementById("value58").value;
    letras[58] = document.getElementById("value59").value;
    letras[59] = document.getElementById("value60").value;
    arr = [letras[54], letras[55], letras[56], letras[57], letras[58], letras[59]];
    palabras[11] = arr;
    buscarDiccionario(arr);
    if (bolCookies)
        guardar();
}




function guardar() {
    if (bolCookies) {
        var cookie = letras[0];
        for (var t = 1; t < letras.length; t++) {
            cookie = cookie + ',' + letras[t];
        }
        localStorage.setItem('pasatiempos', cookie);
        console.log(cookie);
    }
}
function buscarDiccionario(values) {
    if (primeraCargaBol == false) {
        if (values.length == 4) {
            if (values[0] != "" && values[1] != "" &&
                values[2] != "" && values[3] != "") {
                palabra = values[0] + values[1] + values[2] + values[3];
                if (diccionario.includes(palabra)) {
                } else {
                    alert("No existe " + palabra + " en el diccionario.");
                }
            }
        } else {

            if (values[0] != "" && values[1] != "" && values[2] != "" &&
                values[3] != "" && values[4] != "" && values[5] != "") {
                palabra = values[0] + values[1] + values[2] + values[3] + values[4] + values[5];
                if (diccionario.includes(palabra)) {
                } else {
                    alert("No existe " + palabra + " en el diccionario.");
                }
            }
        }
    }
}


function borrarTablero() {
    document.getElementById('value' + 1).value = 'p';
    for (p = 0; p < 60; p++) {
        document.getElementById('value' + (p + 1)).value = '';
        letras[p - 1] = '';
    }
}
function cargar() {
    if (bolCookies) {
        if (localStorage.getItem('pasatiempos') != null) {
            var cookie = localStorage.getItem('pasatiempos');
            cookiearr = cookie.split(',');
            for (c = 1; c <= cookiearr.length; c++) {
                document.getElementById('value' + c).value = cookiearr[c - 1];
                letras[c - 1] = cookiearr[c - 1];
            }
            console.log(cookie);
        }
    } else {
        localStorage.removeItem('pasatiempos');
        localStorage.clear();
        document.getElementById('guardarbt').disabled = true;
        document.getElementById('cargarbt').disabled = true;
    }
}

function mostrarPista() {
    var pista = document.getElementById('pista');
    pista.innerHTML += "<h2>Pistas</h2>"
    npistas--;
    if (npistas <= 0)
        document.getElementById('pistabt').disabled = true;
    var pistasTXT = '';
    for (j = 0; j < palabras.length; j++) {
        for (i = 0; i < diccionario.length; i++) {
            if (palabras[j] != undefined) {
                switch (palabras[j].length) {
                    case 4:
                        if (diccionario[i].length == 4) {
                            undefinedleters = 0;
                            nletrascubiertas = 0
                            for (l = 0; l < palabras[j].length; l++) {
                                if (palabras[j][l] == "" || palabras[j][l] == undefined || palabras[j][l] == null) {
                                    undefinedleters++;
                                } else {
                                    nletrascubiertas++;
                                }
                            }
                            if (diccionario[i].includes(palabras[j][0]) && diccionario[i].includes(palabras[j][1]) && diccionario[i].includes(palabras[j][2]) && diccionario[i].includes(palabras[j][3]) && (undefinedleters > 0) && (nletrascubiertas > 0)) {
                                pistasTXT += diccionario[i] + ' ';
                            }
                        }
                        break;
                    case 6:
                        undefinedleters = 0;
                        nletrascubiertas = 0
                        for (l = 0; l < palabras[j].length; l++) {
                            if (palabras[j][l] == "" || palabras[j][l] == undefined || palabras[j][l] == null) {
                                undefinedleters++;
                            } else {
                                nletrascubiertas++;
                            }
                        }
                        if (diccionario[i].length == 6) {
                            if (diccionario[i].includes(palabras[j][0]) && diccionario[i].includes(palabras[j][1]) && diccionario[i].includes(palabras[j][2]) && diccionario[i].includes(palabras[j][3]) && diccionario[i].includes(palabras[j][4]) & diccionario[i].includes(palabras[j][5]) && (undefinedleters > 0) && (nletrascubiertas > 0)) {
                                pistasTXT += diccionario[i] + ' ';
                            }
                        }
                        break;
                }

            }
        }
    }
    document.getElementById('npistas').innerHTML = 'Te quedan '+npistas+' pistas.';
    pista.innerHTML = pistasTXT;
}
cargarDiccionario();
primeraCarga();

function primeraCarga() {
    setTimeout(3000);
    actualizar0();
    actualizar1();
    actualizar2();
    actualizar3();
    actualizar7();
    actualizar6();
    actualizar5();
    actualizar4();
    actualizar8();
    actualizar9();
    actualizar10();
    actualizar11();
    primeraCargaBol=false;
    document.getElementById('npistas').innerHTML = 'Te quedan '+npistas+' pistas.';
}


function cargarDiccionario() {
    fetch("https://ordenalfabetix.unileon.es/aw/diccionario.txt", {
        method: 'GET',
        headers: { "Host": "https://ordenalfabetix.unileon.es/aw/diccionario.txt", "Origin": "*" }
    })
        .then(response => response.text())
        .then(data => {
            diccionario = data.split("\n");
        });
}
