$().ready(function() {
    $("#table td").click(function() {
        $("#table tr").removeAttr('id', 'selected');
        $("#titleAndFilter ul li a").removeClass('inactiveLink');
        $row = $(this).parent("tr");
        $row.attr('id', 'selected');
        $id = $row.data("id");

        $.ajax({
            url: "php/queries/rowSelection/genres.php",
            dataType: "JSON",
            data: {id: $id},
            cache: false,
            error: function() {
                alert("Erreur: MUDA MUDA MUDA");
            },
            success: function(data) {
                $("#modify .id").val(data[0]["id"]);
                $("#modify .name").val(data[0]["name"]);
                // Archiving
                $("#archive .id").val(data[0]["id"]);
            }
        });
    });
});