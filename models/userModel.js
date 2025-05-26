const mongoose = require('mongoose');
const userSchema = new mongoose.Schema(
    {
        name: {
            type: String
        },
        lastName: {
            type: String
        },
        age: {
            type: Number
        },
        email: {
            type: String
        },
        password: {
            type: String
        }
    },
    {
        timestamps: true,
    }
)

const ModelUser = mongoose.model("users", userSchema);
module.exports = ModelUser;