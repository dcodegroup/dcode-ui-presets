<template>
    <form
        @submit.prevent="onSubmit"
        @change="form.errors.clear($event.target.name)"
    >
        <fieldset>
            <legend>{{ $t("demo.headings.details") }}</legend>
            <input-wrapper
                :form="form"
                field="name"
                label-text="demo.labels.name"
            >
                <input v-model="form.name" type="text" />
            </input-wrapper>
            <input-wrapper
                :form="form"
                field="preferred_name"
                label-text="demo.labels.preferred_name"
            >
                <input v-model="form.preferred_name" type="text" />
            </input-wrapper>
            <input-wrapper
                :form="form"
                field="email"
                label-text="generic.words.email"
            >
                <input v-model="form.email" type="email" />
            </input-wrapper>
            <input-wrapper
                :form="form"
                field="phone"
                label-text="generic.words.phone"
            >
                <input v-model="form.phone" type="phone" />
            </input-wrapper>
            <div class="flex-cols">
                <input-wrapper :form="form" field="start_date" label-text="Start Date" class="md-6">
                    <v-date-picker :value="form.start_date" name="start_date" ></v-date-picker>
                </input-wrapper> 
                <input-wrapper :form="form" field="end_date" label-text="End Date" class="md-6 mrg">
                    <v-date-picker :value="form.end_date" name="end" ></v-date-picker>
                </input-wrapper> 
            </div>
        </fieldset>
        <fieldset>
            <legend>{{ $t("demo.headings.settings") }}</legend>
            <input-wrapper
                :form="form"
                field="active"
                label-class="checkbox-toggle"
            >
                <template #label>
                    <span class="label-text">{{
                        $t("demo.labels.active")
                    }}</span>
                    <input id="active" v-model="form.active" type="checkbox" />
                    <span class="checkbox"></span>
                </template>
            </input-wrapper>
        </fieldset>
        <footer>
            <a href="#" class="button -hollow">{{ $t("generic.buttons.cancel")}}</a>
            <button type="submit" class="button tertiary">{{ $t("generic.buttons.save") }}</button>
        </footer>
    </form>
</template>
<script>
export default {
    name: "StoreUser",
    props: {
        resource: {
            type: Object,
            default: () => {
                return {};
            },
        },
        endpoint: {
            type: String,
            required: true,
        },
        method: {
            type: String,
            required: true,
        },
    },
    data() {
        return {
            form: new Form(
                {
                    _method: this.method,
                    active: this.resource.active ?? true,
                    name: this.resource.name,
                    preferred_name: this.resource.preferred_name,
                    email: this.resource.email,
                    phone: this.resource.phone,
                    start_date: this.resource.start,
                    end_date: this.resource.end,
                },
                {
                    resetOnSuccess: false,
                }
            ),
            // selectedRoles: this.resource.active_roles ?? [],
        };
    },
    // computed: {
    //     getRoles: function () {
    //         return this.roles.filter((role) => {
    //             return !this.selectedRoles.find((element) => {
    //                 return element.id === role.id;
    //             });
    //         });
    //     },
    // },
    methods: {
        onSubmit() {
            // this.form.roles = this.selectedRoles.map((role) => role.id);
            if (this.form.processing) {
                return;
            }
            this.form.post(this.endpoint)
                .then((response) => {
                    if (response.redirect !== undefined) {
                        setTimeout(function () {
                            window.location = response.redirect;
                        }, 1500);
                    }
                })
                .catch((errors) => {
                    console.error(errors);
                });
        },
    },
};
</script>
