// import shop from "@/api/shop";
import VsToast from '@vuesimple/vs-toast';
export default {
    namespaced: true,

    state: {
        // {id, quantity}
        items: [],
        checkoutStatus: null
    },

    getters: {
        cartProducts(state, getters, rootState, rootGetters) {
            return state.items.map(cartItem => {
                // const product = rootState.products.items.find(product => product.id === cartItem.id)
                return {
                    title: cartItem.title,
                    price: cartItem.price,
                    image: cartItem.image,
                    quantity: cartItem.quantity,
                    id: cartItem.id,
                }
            })
        },

        cartTotal(state, getters) {
            return getters.cartProducts.reduce((total, product) => total + product.price * product.quantity, 0)
        },
    },

    mutations: {
        pushProductToCart(state, product) {
            state.items.push({
                title: product.title,
                image: product.image1,
                price: product.discounted_price,
                quantity: 1,
                id: product.id
            })
        },

        incrementItemQuantity(state, cartItem) {
            cartItem.quantity++
        },

        setCheckoutStatus(state, status) {
            state.checkoutStatus = status
        },

        emptyCart(state) {
            state.items = []
        }
    },

    actions: {
        addProductToCart({
            state,
            getters,
            commit,
            rootState,
            rootGetters
        }, product) {
            console.log(product);
            const cartItem = state.items.find(item => item.id === product.id)
            if (!cartItem) {
                commit('pushProductToCart', product);
                VsToast.show({
                    title: 'Success',
                    message: 'Product Added To Cart',
                    variant: 'success',
                });
            } else {
                commit('incrementItemQuantity', cartItem);
                VsToast.show({
                    title: 'Success',
                    message: 'Product Quantity Updated.',
                    variant: 'success',
                });
            }
        },

        // checkout({state, commit}) {
        //   shop.buyProducts(
        //     state.items,
        //     () => {
        //       commit('emptyCart')
        //       commit('setCheckoutStatus', 'success')
        //     },
        //     () => {
        //       commit('setCheckoutStatus', 'fail')
        //     }
        //   )
        // }
    }
}
