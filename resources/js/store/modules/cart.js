// import shop from "@/api/shop";
import VsToast from '@vuesimple/vs-toast';
export default {
    namespaced: true,

    state: {
        // {id, quantity}
        items: [],
        checkoutStatus: 'empty'
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
            commit,
        }, product) {
            const cartItem = state.items.find(item => item.id === product.id)
            if (state.items.length == 0) {
                if (!cartItem) {
                    commit('pushProductToCart', product);
                    VsToast.success('Product Added To Cart.');
                } else {
                    commit('incrementItemQuantity', cartItem);
                    VsToast.success('Product Quantity Updated.');
                }
            } else if (cartItem) {
                commit('incrementItemQuantity', cartItem);
                VsToast.success('Product Quantity Updated.');
            } else {
                VsToast.error('Only single product is allowed in the cart.');
            }
            state.checkoutStatus = 'notempty';
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
