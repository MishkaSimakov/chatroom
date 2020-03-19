import Bus from './Bus'

Echo.join('chat')
    .here((users) => {
        Bus.$emit('users.here', users)
    })
    .joining((user) => {
        Bus.$emit('users.joined', user)
    })
    .leaving((user) => {
        Bus.$emit('users.left', user)
    });
