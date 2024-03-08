<script src=" {{ asset('assets/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <!-- Form validate init -->
<script>
    function setValidateForm(rules, messages = []) {
        jQuery(".form-valide").validate({
            rules,
            messages,
            ignore: [],
            errorClass: "invalid-feedback animated fadeInUp",
            errorElement: "div",
            errorPlacement: function(e, a) {
                jQuery(a).parents(".form-group").append(e)
            },
            highlight: function(e) {
                jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
            },
            success: function(e) {
                jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
            },
        });
    }

</script>