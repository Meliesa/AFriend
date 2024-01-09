<template>
    <div>
        <div v-for="message in messages" :key="message.id">
            {{ message.user.name }}: {{ message.message }}
        </div>
        <input v-model="newMessage" @keyup.enter="sendMessage" placeholder="Type your message...">
    </div>
</template>

<script>
    export default {
        data() {
            return {
                messages: [],
                newMessage: ''
            };
        },

        methods: {
            sendMessage() {
                axios.post('/chat/send', { message: this.newMessage })
                    .then(response => {
                        console.log(response.data);
                        this.newMessage = '';
                    })
                    .catch(error => {
                        console.error(error);
                    });
            }
        },

        mounted() {
            Echo.channel('chat')
                .listen('ChatEvent', (event) => {
                    this.messages.push(event.chat);
                });
        }
    };
</script>
