import db from "../models";

let createNewUser = (user) => {
    return new Promise(async (resolve, reject) => {
        try {
                //create a new user
                await db.User.create(user);
                resolve("done!")
            
        } catch (e) {
            reject(e);
        }
    });
};

module.exports = {
	createdNewUser: createNewUser
};