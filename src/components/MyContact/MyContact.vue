<template>
    <div class="contact">
        <div class="container">
            <PrivacyModal v-show="isModalVisible" @close="closeModal" />
            <div v-if="show === 1">
                <HeaderPattern
                    :subheader="'Контакты'"
                    :header="'Свяжитеся со мной'"
                />
                <div class="contact__wreapper">
                    <div class="contact__social">
                        <div class="contact__link">
                            <a
                                href="mailto:kormachew@mail.ru"
                                target="_blank"
                                class="contact__link-item"
                            >
                                <img
                                    src="../../assets/img/kontaсt/Email.svg"
                                    target="_blank"
                                    alt="Email"
                                />
                            </a>
                            <a
                                href="https://t.me/kormachewf"
                                target="_blank"
                                class="contact__link-item"
                            >
                                <img
                                    src="../../assets/img/kontaсt/Telegram.svg"
                                    alt="telegram"
                                />
                            </a>
                        </div>
                    </div>
                    <div class="contact__text title title_fz14">
                        или оставьте ваши данные:
                    </div>
                    <div class="contact__information">
                        <form
                            class="contact__form"
                            id="form"
                            @submit.prevent="onSubmit"
                        >
                            <div class="contact__input">
                                <input
                                    name="name"
                                    id="name"
                                    type="text"
                                    v-model="form.name"
                                />
                                <label for="name">Ваше имя</label>
                            </div>

                            <div class="contact__input">
                                <input
                                    required
                                    name="email"
                                    id="email"
                                    type="email"
                                    v-model="form.email"
                                />
                                <label for="email">Ваша почта</label>
                            </div>

                            <div class="contact__textarea">
                                <textarea
                                    name="text"
                                    id="text"
                                    type="text"
                                    v-model="form.text"
                                ></textarea>
                                <label for="text">Ваше сообщение</label>
                            </div>

                            <div class="contact__trigger">
                                <div class="contact__flex">
                                    <button class="contact__btn">
                                        <a>Отправить сообщение</a>
                                        <svg
                                            viewBox="-5 -5 110 110"
                                            preserveAspectRatio="none"
                                            aria-hidden="true"
                                        >
                                            <path
                                                d="M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0"
                                            />
                                        </svg>
                                    </button>
                                    <div class="contact__policy">
                                        <input type="checkbox" required />
                                        <span class="title title_fz12"
                                            >Я согласен(а) с
                                            <a @click="showModal"
                                                >политикой конфиденциальности</a
                                            ></span
                                        >
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div v-else-if="show === 2" class="contact__send">
                <HeaderPattern :header="'Спасибо, форма отправленна'" />
                <div class="contact__wreapper">
                    <div class="contact__social">
                        <div class="contact__link">
                            <a
                                href="mailto:kormachew@mail.ru"
                                class="contact__link-item"
                            >
                                <img
                                    src="../../assets/img/kontaсt/Email.svg"
                                    alt="facefook"
                                />
                            </a>
                            <a
                                href="https://t.me/kormachewf"
                                target="_blank"
                                class="contact__link-item"
                            >
                                <img
                                    src="../../assets/img/kontaсt/Telegram.svg"
                                    alt="telegram"
                                />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div v-else-if="show === 3" class="contact__send">
                <HeaderPattern
                    :header="'Письмо не отправленно, что то пошло не так, как планировалось( Попробуйте связаться другими способами!'"
                />
                <div class="contact__wreapper">
                    <div class="contact__social">
                        <div class="contact__link">
                            <a
                                href="mailto:kormachew@mail.ru"
                                class="contact__link-item"
                            >
                                <img
                                    src="../../assets/img/kontaсt/Email.svg"
                                    alt="facefook"
                                />
                            </a>
                            <a
                                href="https://t.me/kormachewf"
                                target="_blank"
                                class="contact__link-item"
                            >
                                <img
                                    src="../../assets/img/kontaсt/Telegram.svg"
                                    alt="telegram"
                                />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import PrivacyModal from '@/components/PrivacyModal.vue';
export default {
    name: 'MyContact',
    components: {
        PrivacyModal,
    },
    data() {
        return {
            form: {
                name: '',
                email: '',
                text: '',
            },
            show: 1,
            isModalVisible: false,
        };
    },

    methods: {
        async onSubmit() {
            let response = await fetch('sendmail.php', {
                method: 'POST',
                body: JSON.stringify(this.form),
                dataType: 'text',
            });
            console.log(response);

            if (response.ok) {
                this.show = 2;
            } else {
                this.show = 3;
                alert(
                    'Письмо не отправленно, что то пошло не так, как планировалось. Попробуйте связаться другими способами'
                );
            }
        },
        showModal() {
            this.isModalVisible = true;
        },
        closeModal() {
            this.isModalVisible = false;
        },
    },
};
</script>

<style lang="scss">
.contact {
    padding: 120px 0 90px 0;
    &__wreapper {
        padding: 0 32px 0 32px;
        display: flex;
        flex-direction: column;
        // grid-template-columns: 400px 585px;
        align-items: center;
    }
    &__photo {
        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    }
    &__subheader {
        position: relative;
        padding: 1px 0 0 12px;
        &::before {
            content: '';
            position: absolute;
            width: 36px;
            height: 36px;
            border-radius: 100%;
            z-index: -1;
            background: $main-color;
            top: -25%;
            left: 0;
        }
    }
    &__header {
        padding-top: 4px;
    }

    &__text,
    &__social {
        margin-top: 20px;
        text-align: center;
    }
    &__link {
        display: flex;
        justify-content: space-around;
        width: 110px;

        &-item {
            img {
                max-width: 30px;
                max-height: 30px;
            }
        }
    }

    &__form {
        position: relative;
        margin-top: 30px;
        display: grid;
        grid-template-columns: repeat(2, 280px);
        grid-template-rows: 45px 100px 45px;
        justify-content: space-between;
        row-gap: 27px;
        column-gap: 10px;
        label {
            position: absolute;
            left: 12px;
            top: -9px;
            height: 18px;
            padding: 0 8px;
            font-size: 12px;
            background-color: #fff;
            margin-bottom: 0;
        }
    }
    &__input {
        position: relative;
        input {
            width: 100%;
            height: 100%;
            padding: 0 20px 0 20px;
            font-size: 14px;
            line-height: 18px;
            font-weight: 500;
        }
    }
    &__textarea {
        position: relative;
        grid-column: 1 / 3;
        textarea {
            resize: none;
            width: 100%;
            height: 100%;
            padding: 20px;
            font-size: 14px;
            line-height: 18px;
            font-weight: 500;
        }
    }

    &__trigger {
        grid-column: 1 / 3;
    }

    &__flex {
        display: flex;
        justify-content: start;
        align-items: center;
    }

    &__policy {
        margin-left: 35px;
        display: flex;
        align-items: center;
        input {
            margin-right: 10px;
        }
        span {
            cursor: pointer;
            border-bottom: 1px blue solid;
        }
        input {
            cursor: pointer;
        }
    }

    &__btn {
        border: 0;
        font-size: 14px;
        line-height: 21px;
        font-weight: bold;
    }

    &__send {
        .divider {
            width: 50%;
            transition: all 0.6s;
        }
        h3 img {
            display: none;
        }
    }
}
</style>
