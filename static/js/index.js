$(document).on("ready", init);

var view;
var controller;
var model;

function init() {
    console.log("((Init))");

    model = new Model();
    controller = new Controller();
    view = new View();
}

function View() {
    console.log("((View))");
    new WOW().init();
    $('#stuck_container').stickUp({
        parts: {
            0: 'home',
            1: 'features',
            2: 'updates',
            3: 'installation',
            4: 'one-pager',
            5: 'extras',
            6: 'wordpress',
            7: 'contact'
        },
        itemClass: 'menuItem',
        itemHover: 'active',
    })
}

function Controller() {
    console.log("((Controller))");
}

function Model() {
    console.log("((Model))");
    //..
}