$(document).ready(function () {
    Rooms.forEach(element => {
        if (element.Status == 1) {
            element.StatusString = "Disponible";
        } else if (element.Status == 2) {
            element.StatusString = "Ocupada";
        } else if (element.Status == 3) {
            element.StatusString = "Bajo Limpieza";
        } else if (element.Status == 4) {
            element.StatusString = "Fuera de Servicio";
        } else if (element.Status == 5) {
            element.StatusString = "Mantenimiento";
        }
    });
    console.log("Habitaciones:")
    console.log(Rooms)
    var i;
    for (i = 0; i < Rooms.length; ++i) {
        //console.log(Rooms[i])
        var CardsContainer = $('.RoomCards');
        var Card = $('<div/>', {
            class: 'Card',
        }).appendTo(CardsContainer);
        var CardTitleContainer = $('<div/>', {
            id: 'TitleContainer',
        }).appendTo(Card);
        var TitleText = $('<div/>', {
            id: 'TitleText',
            text: Rooms[i].Number
        }).appendTo(CardTitleContainer);
        var TitleIcon = $('<div/>', {
            id: 'TitleIcon',
            'data-content': Rooms[i].Number
        }).appendTo(CardTitleContainer);
        var ServicesIcons = $('<div/>', {
            id: 'Services',
        }).appendTo(Card);
        if (Rooms[i].TV == true) {
            var TVIcon = $('<div/>', {
                class: 'TV',
                id: 'Icon',
            }).appendTo(ServicesIcons);
        }
        if (Rooms[i].HotWater == true) {
            var HotWaterIcon = $('<div/>', {
                class: 'HotWater',
                id: 'Icon',
            }).appendTo(ServicesIcons);
        }
        if (Rooms[i].WiFi == true) {
            var WiFiIcon = $('<div/>', {
                class: 'WiFi',
                id: 'Icon',
            }).appendTo(ServicesIcons);
        }
        var StatusContainer = $('<div/>', {
            id: 'StatusContainer',
        }).appendTo(Card);
        var StatusIcon = $('<div/>', {
            id: 'Icon',
        }).appendTo(StatusContainer);
        var StatusTitle = $('<div/>', {
            id: 'Title',
            text: Rooms[i].StatusString,
        }).appendTo(StatusContainer);
        if (Rooms[i].Status == 1) {
            $(Card).addClass("Available");
            $(StatusIcon).addClass("Available");
        } else if (Rooms[i].Status == 2) {
            $(Card).addClass("Busy");
            $(StatusIcon).addClass("Busy");
        } else if (Rooms[i].Status == 3) {
            $(Card).addClass("Cleaning");
            $(StatusIcon).addClass("Cleaning");
        } else if (Rooms[i].Status == 4) {
            $(Card).addClass("OutOfService");
            $(StatusIcon).addClass("OutOfService");
        } else if (Rooms[i].Status == 5) {
            $(Card).addClass("Maintenance");
            $(StatusIcon).addClass("Maintenance");
        }
        var ModalDialog = $('.RoomsModal');
        $(ModalDialog).dialog({
            autoOpen: false,
            minWidth: 512,
            resizable: false,
            show: {
                effect: "blind",
                duration: 250
            },
            hide: {
                effect: "blind",
                duration: 250
            }
        });
        $(TitleIcon).on("click", function () {
            Rooms.forEach(element => {
                if (element.Number == $(this).data("content")) {
                    $('.RoomsModal #RoomNumber').text(element.Number)
                    $('.RoomsModal #RoomType').text(element.Type)
                    $('.RoomsModal #RoomServices').text(element.ServicesString)
                    $('.RoomsModal #RoomStatus').text(element.StatusString)
                } else {}
            });
            $(ModalDialog).dialog("open");
        });
        $(".btn-cancel").on("click", function () {
            $(ModalDialog).dialog("close");
        });
    }
});
