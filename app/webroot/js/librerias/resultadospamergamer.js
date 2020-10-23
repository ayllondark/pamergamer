$(document).ready(function() {


    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }

    var semana = getParameterByName('sem');
    $("#semanaexamen").html(semana);
    var codcurso = getParameterByName('curid');
    $("#cursoexamen").html(codcurso);

    ListaResultados();
    llenaPerfil();


});


Swal.fire({
    icon: 'info',
    title: '¿Ver Resultados?',
    text: 'Presione OK para ver sus resultados'

});


// Audio
winner = new Audio('../img/pamergamer/sounds/fondowinner.mp3');
loser = new Audio('../img/pamergamer/sounds/fondoperfil.mp3');

//wrong.volume = 0.2;
// ## Create a function to play our sounds
function playSound(sound) {
    if (globals.audio) {

        sound.play(); // Play sound
    }
}

function playAudio(sound) {

    sound.loop = false;
    sound.volume = 0.7;
    sound.play(); // Play sound

}

/* start fecha examen */
var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
var diasSemana = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
var f = new Date();

/* end fecha examen */

function llenaPerfil() {

    var aParam = '{}';

    aParam = segenNegocios(aParam);

    var datosOK = "";
    var strUrl = "getdatos/7";
    $.post(strUrl, { "objJSON": aParam }, null, "html")
        .done(function(data, textStatus, jqXHR) {
            data = segdeNegocios(data);

            datosOK = data.message.toUpperCase();
            console.log(datosOK);
            if (datosOK == "OK") {
                var datos = data.data;

                $.each(datos, function(index, value) {
                    var nick = datos[index].nick;
                    var personaje = datos[index].personaje;
                    var notaperfil = datos[index].notalec;
                    var avataralu = datos[index].imagen;
                    //<span style="width: 25%"></span>
                    $("#nick").html(nick);
                    $("#imgavatar").html('<img src="../img/pamergamer/avatars/' + avataralu + '" width="40px" height="40px">');

                    $("#fechaac").html(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                    // ("#totmedallas").html('<img class="icoavatar" src="../app/webroot/img/pamergamer/escudo.svg" alt=""> ' + notaperfil / 100);
                });

            } else {
                viewMessage("divMessage", "Alerta", data.data, "danger", "ban");
            }

        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            viewMessage("Mensaje", "Alerta", errorThrown + " " + jqXHR + " Error al leer encuesta", "warning", "warning");
        })
        .always(function() {
            reLogin(datosOK);
        });

}


$('.swal2-confirm').click(function() {
    var aParam = '{"semana":"' + $("#semanaexamen").html() + '","curso":"' + $("#cursoexamen").html() + '"}';
    aParam = segenNegocios(aParam);

    var datosOK = "";
    var strUrl = "getdatos/3";
    $.post(strUrl, { "objJSON": aParam }, null, "html")
        .done(function(data, textStatus, jqXHR) {
            data = segdeNegocios(data);

            datosOK = data.message.toUpperCase();
            console.log(datosOK);
            if (datosOK == "OK") {
                var datos = data.data;

                $.each(datos, function(index, value) {
                    var puntos = datos[index].puntos;
                    var puntotot = datos[index].punttot;



                    if (puntos == puntotot) {
                        playAudio(loser);
                    } else {
                        playAudio(winner);

                        /* start confetit */
                        const confetti = document.getElementById('confetti');
                        const confettiCtx = confetti.getContext('2d');
                        let container, confettiElements = [],
                            clickPosition;

                        // helper
                        rand = (min, max) => Math.random() * (max - min) + min;

                        // params to play with
                        const confettiParams = {
                            // number of confetti per "explosion"
                            number: 70,
                            // min and max size for each rectangle
                            size: { x: [5, 20], y: [10, 18] },
                            // power of explosion
                            initSpeed: 25,
                            // defines how fast particles go down after blast-off
                            gravity: 0.65,
                            // how wide is explosion
                            drag: 0.08,
                            // how slow particles are falling
                            terminalVelocity: 6,
                            // how fast particles are rotating around themselves
                            flipSpeed: 0.017,
                        };
                        const colors = [
                            { front: '#3B870A', back: '#235106' },
                            { front: '#B96300', back: '#6f3b00' },
                            { front: '#E23D34', back: '#88251f' },
                            { front: '#CD3168', back: '#7b1d3e' },
                            { front: '#664E8B', back: '#3d2f53' },
                            { front: '#394F78', back: '#222f48' },
                            { front: '#008A8A', back: '#005353' },
                        ];

                        setupCanvas();
                        updateConfetti();

                        confetti.addEventListener('click', addConfetti);
                        window.addEventListener('resize', () => {
                            setupCanvas();
                            hideConfetti();
                        });

                        // Confetti constructor
                        function Conf() {
                            this.randomModifier = rand(-1, 1);
                            this.colorPair = colors[Math.floor(rand(0, colors.length))];
                            this.dimensions = {
                                x: rand(confettiParams.size.x[0], confettiParams.size.x[1]),
                                y: rand(confettiParams.size.y[0], confettiParams.size.y[1]),
                            };
                            this.position = {
                                x: clickPosition[0],
                                y: clickPosition[1]
                            };
                            this.rotation = rand(0, 2 * Math.PI);
                            this.scale = { x: 1, y: 1 };
                            this.velocity = {
                                x: rand(-confettiParams.initSpeed, confettiParams.initSpeed) * 0.4,
                                y: rand(-confettiParams.initSpeed, confettiParams.initSpeed)
                            };
                            this.flipSpeed = rand(0.2, 1.5) * confettiParams.flipSpeed;

                            if (this.position.y <= container.h) {
                                this.velocity.y = -Math.abs(this.velocity.y);
                            }

                            this.terminalVelocity = rand(1, 1.5) * confettiParams.terminalVelocity;

                            this.update = function() {
                                this.velocity.x *= 0.98;
                                this.position.x += this.velocity.x;

                                this.velocity.y += (this.randomModifier * confettiParams.drag);
                                this.velocity.y += confettiParams.gravity;
                                this.velocity.y = Math.min(this.velocity.y, this.terminalVelocity);
                                this.position.y += this.velocity.y;

                                this.scale.y = Math.cos((this.position.y + this.randomModifier) * this.flipSpeed);
                                this.color = this.scale.y > 0 ? this.colorPair.front : this.colorPair.back;
                            }
                        }

                        function updateConfetti() {
                            confettiCtx.clearRect(0, 0, container.w, container.h);

                            confettiElements.forEach((c) => {
                                c.update();
                                confettiCtx.translate(c.position.x, c.position.y);
                                confettiCtx.rotate(c.rotation);
                                const width = (c.dimensions.x * c.scale.x);
                                const height = (c.dimensions.y * c.scale.y);
                                confettiCtx.fillStyle = c.color;
                                confettiCtx.fillRect(-0.5 * width, -0.5 * height, width, height);
                                confettiCtx.setTransform(1, 0, 0, 1, 0, 0)
                            });

                            confettiElements.forEach((c, idx) => {
                                if (c.position.y > container.h ||
                                    c.position.x < -0.5 * container.x ||
                                    c.position.x > 1.5 * container.x) {
                                    confettiElements.splice(idx, 1)
                                }
                            });
                            window.requestAnimationFrame(updateConfetti);
                        }

                        function setupCanvas() {
                            container = {
                                w: confetti.clientWidth,
                                h: confetti.clientHeight
                            };
                            confetti.width = container.w;
                            confetti.height = container.h;
                        }

                        function addConfetti(e) {
                            const canvasBox = confetti.getBoundingClientRect();
                            if (e) {
                                clickPosition = [
                                    e.clientX - canvasBox.left,
                                    e.clientY - canvasBox.top
                                ];
                            } else {
                                clickPosition = [
                                    canvasBox.width * Math.random(),
                                    canvasBox.height * Math.random()
                                ];
                            }
                            for (let i = 0; i < confettiParams.number; i++) {
                                confettiElements.push(new Conf())
                            }
                        }

                        function hideConfetti() {
                            confettiElements = [];
                            window.cancelAnimationFrame(updateConfetti)
                        }

                        confettiLoop();

                        function confettiLoop() {
                            addConfetti();
                            setTimeout(confettiLoop, 700 + Math.random() * 1700);
                        }
                        /* end confetit */
                    }


                });

            } else {
                viewMessage("divMessage", "Alerta", data.data, "danger", "ban");
                $("#cards").append(data.data);
            }

        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            viewMessage("Mensaje", "Alerta", errorThrown + " " + jqXHR + " Error al leer encuesta", "warning", "warning");
        })
        .always(function() {
            reLogin(datosOK);
        });

});


function ListaResultados() {

    $("#cards").html('');
    //alert($(this).attr('data-semana'));
    var semana = $("#semanaexamen").html();
    var codcurso = $("#cursoexamen").html();
    console.log(semana + ' ' + codcurso);
    //var grado = 292;

    var aParam = '{"semana":"' + $("#semanaexamen").html() + '","curso":"' + $("#cursoexamen").html() + '"}';
    console.log(aParam);
    // aParam = '{"grado":"' + isNull($("#txtSolicitud").val()) + '"}';
    // console.log(aParam);
    aParam = segenNegocios(aParam);

    var datosOK = "";
    var strUrl = "getdatos/3";
    $.post(strUrl, { "objJSON": aParam }, null, "html")
        .done(function(data, textStatus, jqXHR) {
            data = segdeNegocios(data);
            // console.log(data);

            datosOK = data.message.toUpperCase();
            console.log(datosOK);
            if (datosOK == "OK") {
                var datos = data.data;

                //$('<script>alert("hi");</' + 'script>').appendTo(document.body);

                $.each(datos, function(index, value) {
                    //$(".category").html(datos[index].cod); console.log(datos[index].cod);
                    var nropregunta = datos[index].id;
                    $('#nropregunta').html(nropregunta);
                    var puntos = datos[index].puntos;
                    var puntotot = datos[index].punttot;
                    var correctas = datos[index].correctas;
                    var incorrectas = datos[index].incorrectas;
                    var totpreguntas = datos[index].totalpreguntas;
                    var nomcurso = (datos[index].nomcurso).toUpperCase();
                    var nomgrado = (datos[index].grado).toUpperCase();
                    var semana = (datos[index].semana);

                    $('#puntaje').html('OBTUVISTES ' + puntos + ' PTS');
                    $('#puntaje2').html(puntos);
                    $('#puntajetot').html(puntotot);
                    $('#correctas').html(correctas);
                    $('#incorrectas').html(incorrectas);
                    $('#totalpreguntas').html(totpreguntas);
                    $('#curso').html(nomcurso);
                    $('#grado').html(nomgrado);
                    $('#semana').html(semana);

                    if (puntos == puntotot) {
                        $('#paraimagen').html('<img width="40px" class="animate__animated animate__pulse animate__repeat-3" height="40px" src="../medallas/winner.svg" alt="">');
                        $('#titmensa').html('!FELICIDADES¡');
                        $('#subtitmensa').html('SUPERASTE EL RETO PAMER');
                    } else {
                        $('#paraimagen').html('<img width="30%" class="animate__animated animate__pulse animate__repeat-3" src="../img/pamergamer/medallas/winner.svg" alt="">');
                        $('#titmensa').html('!SIGUE INTENTANDO!');
                        $('#subtitmensa').html('NO TE RINDAS, SE QUE LA SIGUIENTE VEZ LO LOGRARAS ;)');
                    }

                    $('.barralec').html('<span style="width: ' + (puntos / puntotot) * 100 + '%"></span>' +
                        '<p class="text-center pordesa">Obtuviste el ' + ((puntos / puntotot) * 100).toFixed() + '% del desafío</p>' +
                        '</div>');

                });

            } else {
                viewMessage("divMessage", "Alerta", data.data, "danger", "ban");
                $("#cards").append(data.data);
            }

        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            viewMessage("Mensaje", "Alerta", errorThrown + " " + jqXHR + " Error al leer encuesta", "warning", "warning");
        })
        .always(function() {
            reLogin(datosOK);
        });


};


$('#btnRegresar').click(function() {
    setTimeout("location.href='cursospamergamer'", 1000);
});

///////////////////////////
/*$('.btn').click(function() {
    $('.btn').removeClass('active').addClass('inactive');
    $(this).removeClass('inactive').addClass('active');
});*/





function htmlEscape(str) {
    return str
        .replace(/&/g, '&amp;')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#39;')
        .replace(/\n/g, '<br>')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;');
}