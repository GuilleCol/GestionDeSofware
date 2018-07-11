function mostrar(id) {
    if (id == "uno") {
        $("#uno").show();
        $("#dos").hide();
        $("#tres").hide();
    }

    if (id == "dos") {
        $("#uno").hide();
        $("#dos").show();
        $("#tres").hide();
    }

    if (id == "tres") {
        $("#uno").hide();
        $("#dos").hide();
        $("#tres").show();
    }
}