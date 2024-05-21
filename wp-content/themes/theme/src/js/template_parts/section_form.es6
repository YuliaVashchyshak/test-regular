jQuery(function ($) {
    const buttonSubmit = document.querySelector(".form__button");

    buttonSubmit.addEventListener("click", (e) => {

        e.preventDefault()
        const loader = document.querySelector(".form__loader");
        const success = document.querySelector(".form__success");
        const fail = document.querySelector(".form__fail");
        const inputName = document.querySelector(".form__name");
        const inputEmail = document.querySelector(".form__email");
        const inputTextarea = document.querySelector(".form__textarea");
        const fields = [inputName, inputEmail, inputTextarea]

        fields.forEach(item => {
            item.classList.remove('error')
            if (!item.value) {
                item.classList.add('error')
            }
        })

        if (inputName.value && inputEmail.value && inputTextarea.value) {
            let data = {
                action: "contact_form",
                name: inputName.value,
                email: inputEmail.value,
                textarea: inputTextarea.value,
            };

            loader.classList.add('active');
            success.classList.remove('active')
            fail.classList.remove('active')


            $.ajax({
                url: "/wp-admin/admin-ajax.php",
                data: data,
                type: "POST",
                success: function (data) {
                    if (data) {
                        loader.classList.remove('active');

                        if (data == 200) {
                            success.classList.add('active')
                        }

                        if (data == 400) {
                            fail.classList.add('active')
                        }
                    }
                },
            });
        }
    });


    const refreshPosts = () => {

        let data = {
            action: "refresh_posts",
        };

        $.ajax({
            url: "/wp-admin/admin-ajax.php",
            data: data,
            type: "POST",
            success: function (data) {
                if (data) {
                    document.querySelector('.refresh__posts').innerHTML = data
                    removePosts()
                }
            },
        });
    }

    const removePosts = () => {
        const deletePosts = document.querySelectorAll('.delete_post')
        deletePosts.forEach(deletePost => {
            deletePost.addEventListener('click', () => {
                let data = {
                    action: "delete_posts",
                    id: deletePost.getAttribute('data-id')
                };

                $.ajax({
                    url: "/wp-admin/admin-ajax.php",
                    data: data,
                    type: "POST",
                    success: function (data) {
                        if (data) {
                            refreshPosts()
                        }
                    },
                });
            })
        })
    }
    removePosts()
});
