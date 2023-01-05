<template>
    <div>
        <section class="c-bell">
            <button class="c-bell__button" @click="makeAsRead"> <i class="fas fa-bell"></i> </button>
            <div class="c-bell__list" v-if="notifications.length > 0">
                 <a href=""  v-for="notification in notifications">
                     {{ notification.data.document.title }}
                 </a>
            </div>
            <span> {{ unreadNotifications.length }} </span>
        </section>
    </div>
</template>


<script>
export default {
    props: ['user'],
    data(){
        return {
            notifications: []
        }
    },
    methods: {
        get_notifications()
        {
            axios.get("/push/get_notifications")
                .then( (response) => {
                    console.log("vue_get_notifications:", response);
                    this.notifications = response.data.notifications;
                })
                .catch( (err) => {
                    console.error(err);
                });
        },
        makeAsRead()
        {
            alert("test");
            axios.get("/push/mark_all_reading/"+this.user.id).then( response => {
                console.log(response);
            });
        }
    },
    computed: {
        unreadNotifications(){
            return this.notifications.filter(notification => {
                return notification.read_at == null;
            });
        }
    },
    created() {
        this.get_notifications();
    },
    mounted() {
        /*================================================================
        =
        =  1. DBNotication Broadcast 받는 부분
        =
        =================================================================*/
        Echo.private('events.' + this.user.id)
            .listen('PushEvent', (event) => {
                console.log("_vue_event_message:", event.message);

                toast.fire({
                    title: event.message,
                    imageUrl: 'https://unsplash.it/400/200',
                    imageWidth: 400,
                    imageHeight: 200,
                    imageAlt: 'Custom image'
                })

                this.get_notifications();
            });

        /*
        Echo.private('App.User.' + this.user.id)
            .notification( (response) => {

                console.log("_notification:", response);

            });
        */


    }
}
</script>





<style scoped>
    .c-bell {
        position: relative;
        display: inline-block;
    }

    .c-bell:hover .c-bell__list {
        display: block;
    }

    .c-bell__button {
        padding: 7px 16px;
        background-color: #0063B1;
        font-size: 16px;
        border:none;
        border-radius: 5px;
        cursor: pointer;
    }

    .c-bell__button i {
        color:white;
    }

    .c-bell__list {
        display: none;
        position: absolute;
        left:-150px;
        min-width: 200px;
        background-color: #F5F5F5;
        border: solid 1px gray;
        padding: 5px;
    }

    .c-bell__list > a {
        padding: 12px 16px;
        color:black;
        display: block;
        text-align: left;
    }

    .c-bell__list a:hover {

    }

    .c-bell span {
        cursor: pointer;
        font-size: 18px;
        font-weight: bold;
        color:white;
    }
</style>