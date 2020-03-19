<template>
    <div class="chat">
        <chat-messages></chat-messages>
        <form action="#" class="chat__form">
            <textarea @keydown="handleMessageInput" v-model="body" id="body" cols="30" rows="4" class="chat__form-input"></textarea>

            <span class="chat__form-helptext">
                Hit <b>Return</b> to send or <b>Ctrl + Return</b> for a new line
            </span>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                body: null
            }
        },
        methods: {
            handleMessageInput(e) {
                if (e.keyCode === 13 && !e.ctrlKey) {
                    e.preventDefault()
                    this.send()
                }
            },
            send() {

            }
        }
    }
</script>

<style lang="scss">
    .chat {
        background-color: #fff;
        border: 1px solid #d3e0e9;
        border-radius: 3px;

        &__form {
            border-top: 1px solid #d3e0e9;
            padding: 10px;

            &-input {
                width: 100%;
                border: 1px solid #d3e0e9;
                padding: 5px 10px;
                outline: none;
            }

            &-helptext {
                color: #aaa;
            }
        }
    }
</style>
