$(function () {

    // JS THOMAS

    // Autocomplete searchbar
    let availableTags = [
        "Acer",
        "Antivirus",
        "Aorus",
        "Asus",
        "Apple",
        "BitDefender",
        "Barette Mémoire",
        "Carte graphique",
        "Carte Mère",
        "Casque",
        "Clavier",
        "Disque dur",
        "Disque dur SSD",
        "Ecran",
        "ESET",
        "Galaxy",
        "Ipad",
        "Materiel.net",
        "Micro",
        "Microphone",
        "Microsoft",
        "Office",
        "PC portable",
        "PC fixe",
        "PC Gamer",
        "Périphérique",
        "Samsung",
        "Souris",
        "SSD",
        "Tablette",
        "Windows 10",
    ];
    $("#tags").autocomplete({
        source: availableTags
    });

    $(".fa-search").on("click", function () {
        $("#searchBar").slideToggle();
    })

    // BOUTONS MEGA-MENU


    for (let boucle = 1; boucle < 4; boucle++) {
        $("#mega-btn" + boucle).on("mouseover mouseout", function () {
            $("#mega-menu" + boucle).toggle();
        })
        $("#mega-menu" + boucle).on("mouseover mouseout", function () {
            $("#mega-menu" + boucle).toggle();
        })
    }

    // BOUTONS PROMOS
    $("#index-btn1").on("click", function () {
        $("#product-list-1").show();
        $("#product-list-2").hide();
        $("#product-list-3").hide();
    })
    $("#index-btn2").on("click", function () {
        $("#product-list-1").hide();
        $("#product-list-2").show();
        $("#product-list-3").hide();
    })
    $("#index-btn3").on("click", function () {
        $("#product-list-1").hide();
        $("#product-list-2").hide();
        $("#product-list-3").show();
    })

    // IMAGES MEGA-MENU
    for (let boucle = 1; boucle < 13; boucle++) {
        $("#categ"+boucle).on("mouseover mouseout", function () {
            $(".menu-img").attr("src", "image/mega-menu/categories/categorie"+boucle+".jpg")
            $(".menu-img").toggle();
        })
    }

    // SPINNER
    let spinner = $(".spinner").spinner();

    $("#disable").on("click", function () {
        if (spinner.spinner("option", "disabled")) {
            spinner.spinner("enable");
        } else {
            spinner.spinner("disable");
        }
    });
    $("#destroy").on("click", function () {
        if (spinner.spinner("instance")) {
            spinner.spinner("destroy");
        } else {
            spinner.spinner();
        }
    });
    $("#getvalue").on("click", function () {
        alert(spinner.spinner("value"));
    });
    $("#setvalue").on("click", function () {
        spinner.spinner("value", 5);
    });

    $("button").button();

    // DEROULANT DETAIL PRODUIT
    $("#description-bloc").on("click", function () {
        $("#detail-bloc").toggle();
    })

    // PREVIEW IMAGE PRODUIT
    $("#product-preview2").on("click", function () {
        let previewValue1 = $("#product-preview1").attr("src");
        let previewValue2 = $("#product-preview2").attr("src");
        $("#product-preview1").attr("src", previewValue2);
        $(this).attr("src", previewValue1);
        $(previewValue1) = $("#product-preview1").attr("src");
        $(previewValue2) = $("#product-preview2").attr("src");

    })
    $("#product-preview3").on("click", function () {
        let previewValue1 = $("#product-preview1").attr("src");
        let previewValue3 = $("#product-preview3").attr("src");
        $("#product-preview1").attr("src", previewValue3);
        $(this).attr("src", previewValue1);
        $(previewValue1) = $("#product-preview1").attr("src");
        $(previewValue3) = $("#product-preview3").attr("src");
    })
    $("#product-preview1").on("click", function () {})


    // PAIEMENT
    $("#img-payment-1").on("click", function () {
        $("#blueCard").show();
        $("#masterCard").hide();
        $("#paypal").hide();
    })
    $("#img-payment-2").on("click", function () {
        $("#blueCard").hide();
        $("#masterCard").show();
        $("#paypal").hide();
    })
    $("#img-payment-3").on("click", function () {
        $("#blueCard").hide();
        $("#masterCard").hide();
        $("#paypal").show();
    })

    // REPOSITIONNER FILTRES SELON TAILLE DE L'ECRAN
    $(window).on("resize", function () {
        let filter = $("#subFilter")[0];
        let width = $(window).innerWidth();
        if (width >= 576 && width <= 770) {
            $("#tablet-filter")[0].appendChild(filter);
        }
        if (width < 576) {
            $("#phone-filter")[0].appendChild(filter);
        }
        if (width > 770) {
            $("#bloc-filter")[0].appendChild(filter);
        }
    })

    // FILTRES 
    $(":checkbox").on("change", function () {
        let checkedAny = $(":checkbox:checked");
        let checkedMarque = $(".subFilterMarque :checkbox:checked");
        let checkedPrix = $(".subFilterPrix :checkbox:checked");
        if (checkedAny.length == 0) {
            $("#product-categ .card-product").show()
        } else if (checkedMarque.length > 0) {
            $("#product-categ .card-product").hide()

            checkedMarque.each(function () {
                let data = $(this).attr("data-filter")
                $("#product-categ ." + data).show()
            })

            if (checkedPrix.length > 0) {
                let checkboxPrix = $(".subFilterPrix :checkbox");
                checkboxPrix.each(function () {
                    let data = $(this).attr("data-filter")
                    if ($(this).is(":checked")) {
                        $("#product-categ ." + data + ":visible").show()
                    } else {
                        $("#product-categ ." + data).hide()
                    }
                })
            }
        } else if (checkedPrix.length > 0) {
            $("#product-categ .card-product").hide()

            checkedPrix.each(function () {
                let data = $(this).attr("data-filter")
                $("#product-categ ." + data).show()
            })

            if (checkedMarque.length > 0) {
                let checkboxMarque = $(".subFilterMarque :checkbox");
                checkboxMarque.each(function () {
                    let data = $(this).attr("data-filter")
                    if ($(this).is(":checked")) {
                        $("#product-categ ." + data + ":visible").show()
                    } else {
                        $("#product-categ ." + data).hide()
                    }
                })
            }
        }
    })

    // REINITIALISER CHECKBOX AU LOAD DE LA PAGE
    if ($("#bloc-filter").length) {
        $("#bloc-filter")[0].reset();
    }

    // JS PHIPHI
    $('#customer-table').DataTable({
        language: {
            info: "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
            search: "Rechercher&nbsp;:",
            lengthMenu: "Afficher _MENU_ &eacute;l&eacute;ments",


            paginate: {
                first: "Premier",
                previous: "Pr&eacute;c&eacute;dent",
                next: "Suivant",
                last: "Dernier"
            }
        }
    });
    $('.dataTables_length').addClass('bs-select');

    var dateFormat = "mm/dd/yy",
        from = $("#from")
        .datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3
        })
        .on("change", function () {
            to.datepicker("option", "minDate", getDate(this));
        }),
        to = $("#to").datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3
        })
        .on("change", function () {
            from.datepicker("option", "maxDate", getDate(this));
        });

    function getDate(element) {
        var date;
        try {
            date = $.datepicker.parseDate(dateFormat, element.value);
        } catch (error) {
            date = null;
        }

        return date;
    }

    $("#accordion").accordion({
        heightStyle: "content",
        // collapsible : true,

    });
    $("#btn-accordeon1").on("click", function () {
        $(".deroulant1").toggle();
    })
    $("#btn-accordeon2").on("click", function () {
        $(".deroulant2").toggle();
    })
    $("#btn-accordeon3").on("click", function () {
        $(".deroulant3").toggle();
    })






});