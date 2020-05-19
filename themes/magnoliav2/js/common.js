! function(t, e) {
    "function" == typeof define && define.amd ? define(e) : "object" == typeof exports ? module.exports = e : t.echo = e(t)
}(this, function(t) {
    "use strict";
    var e, o, n, r, c = {},
        i = function() {},
        a = function(t, e) {
            var o = t.getBoundingClientRect();
            return o.right >= e.l && o.bottom >= e.t && o.left <= e.r && o.top <= e.b
        },
        d = function() {
            clearTimeout(o), o = setTimeout(c.render, n)
        };
    return c.init = function(o) {
        o = o || {};
        var a = o.offset || 0,
            l = o.offsetVertical || a,
            u = o.offsetHorizontal || a,
            f = function(t, e) {
                return parseInt(t || e, 10)
            };
        e = {
            t: f(o.offsetTop, l),
            b: f(o.offsetBottom, l),
            l: f(o.offsetLeft, u),
            r: f(o.offsetRight, u)
        }, n = f(o.throttle, 250), r = !!o.unload, i = o.callback || i, c.render(), document.addEventListener ? (t.addEventListener("scroll", d, !1), t.addEventListener("load", d, !1)) : (t.attachEvent("onscroll", d), t.attachEvent("onload", d))
    }, c.render = function() {
        for (var o, n, d = document.querySelectorAll("img[data-echo]"), l = d.length, u = {
                l: 0 - e.l,
                t: 0 - e.t,
                b: (t.innerHeight || document.documentElement.clientHeight) + e.b,
                r: (t.innerWidth || document.documentElement.clientWidth) + e.r
            }, f = 0; l > f; f++) n = d[f], a(n, u) ? (r && n.setAttribute("data-echo-placeholder", n.src), n.src = n.getAttribute("data-echo"), r || n.removeAttribute("data-echo"), i(n, "load")) : r && (o = n.getAttribute("data-echo-placeholder")) && (n.src = o, n.removeAttribute("data-echo-placeholder"), i(n, "unload"));
        l || c.detach()
    }, c.detach = function() {
        document.removeEventListener ? t.removeEventListener("scroll", d) : t.detachEvent("onscroll", d), clearTimeout(o)
    }, c
});





$(window).ready(function() {
        
    }),
    function(e) {
        e.extend(e.fn, {
            validate: function(t) {
                if (!this.length) return void(t && t.debug && window.console && console.warn("Nothing selected, can't validate, returning nothing."));
                var a = e.data(this[0], "validator");
                return a ? a : (this.attr("novalidate", "novalidate"), a = new e.validator(t, this[0]), e.data(this[0], "validator", a), a.settings.onsubmit && (this.validateDelegate(":submit", "click", function(t) {
                    a.settings.submitHandler && (a.submitButton = t.target), e(t.target).hasClass("cancel") && (a.cancelSubmit = !0)
                }), this.submit(function(t) {
                    function n() {
                        var n;
                        return a.settings.submitHandler ? (a.submitButton && (n = e("<input type='hidden'/>").attr("name", a.submitButton.name).val(a.submitButton.value).appendTo(a.currentForm)), a.settings.submitHandler.call(a, a.currentForm, t), a.submitButton && n.remove(), !1) : !0
                    }
                    return a.settings.debug && t.preventDefault(), a.cancelSubmit ? (a.cancelSubmit = !1, n()) : a.form() ? a.pendingRequest ? (a.formSubmitted = !0, !1) : n() : (a.focusInvalid(), !1)
                })), a)
            },
            valid: function() {
                if (e(this[0]).is("form")) return this.validate().form();
                var t = !0,
                    a = e(this[0].form).validate();
                return this.each(function() {
                    t &= a.element(this)
                }), t
            },
            removeAttrs: function(t) {
                var a = {},
                    n = this;
                return e.each(t.split(/\s/), function(e, t) {
                    a[t] = n.attr(t), n.removeAttr(t)
                }), a
            },
            rules: function(t, a) {
                var n = this[0];
                if (t) {
                    var i = e.data(n.form, "validator").settings,
                        s = i.rules,
                        r = e.validator.staticRules(n);
                    switch (t) {
                        case "add":
                            e.extend(r, e.validator.normalizeRule(a)), s[n.name] = r, a.messages && (i.messages[n.name] = e.extend(i.messages[n.name], a.messages));
                            break;
                        case "remove":
                            if (!a) return delete s[n.name], r;
                            var o = {};
                            return e.each(a.split(/\s/), function(e, t) {
                                o[t] = r[t], delete r[t]
                            }), o
                    }
                }
                var l = e.validator.normalizeRules(e.extend({}, e.validator.classRules(n), e.validator.attributeRules(n), e.validator.dataRules(n), e.validator.staticRules(n)), n);
                if (l.required) {
                    var u = l.required;
                    delete l.required, l = e.extend({
                        required: u
                    }, l)
                }
                return l
            }
        }), e.extend(e.expr[":"], {
            blank: function(t) {
                return !e.trim("" + t.value)
            },
            filled: function(t) {
                return !!e.trim("" + t.value)
            },
            unchecked: function(e) {
                return !e.checked
            }
        }), e.validator = function(t, a) {
            this.settings = e.extend(!0, {}, e.validator.defaults, t), this.currentForm = a, this.init()
        }, e.validator.format = function(t, a) {
            return 1 === arguments.length ? function() {
                var a = e.makeArray(arguments);
                return a.unshift(t), e.validator.format.apply(this, a)
            } : (arguments.length > 2 && a.constructor !== Array && (a = e.makeArray(arguments).slice(1)), a.constructor !== Array && (a = [a]), e.each(a, function(e, a) {
                t = t.replace(new RegExp("\\{" + e + "\\}", "g"), function() {
                    return a
                })
            }), t)
        }, e.extend(e.validator, {
            defaults: {
                messages: {},
                groups: {},
                rules: {},
                errorClass: "error",
                validClass: "valid",
                errorElement: "label",
                focusInvalid: !0,
                errorContainer: e([]),
                errorLabelContainer: e([]),
                onsubmit: !0,
                ignore: ":hidden",
                ignoreTitle: !1,
                onfocusin: function(e) {
                    this.lastActive = e, this.settings.focusCleanup && !this.blockFocusCleanup && (this.settings.unhighlight && this.settings.unhighlight.call(this, e, this.settings.errorClass, this.settings.validClass), this.addWrapper(this.errorsFor(e)).hide())
                },
                onfocusout: function(e) {
                    this.checkable(e) || !(e.name in this.submitted) && this.optional(e) || this.element(e)
                },
                onkeyup: function(e, t) {
                    (9 !== t.which || "" !== this.elementValue(e)) && (e.name in this.submitted || e === this.lastElement) && this.element(e)
                },
                onclick: function(e) {
                    e.name in this.submitted ? this.element(e) : e.parentNode.name in this.submitted && this.element(e.parentNode)
                },
                highlight: function(t, a, n) {
                    "radio" === t.type ? this.findByName(t.name).addClass(a).removeClass(n) : e(t).addClass(a).removeClass(n)
                },
                unhighlight: function(t, a, n) {
                    "radio" === t.type ? this.findByName(t.name).removeClass(a).addClass(n) : e(t).removeClass(a).addClass(n)
                }
            },
            setDefaults: function(t) {
                e.extend(e.validator.defaults, t)
            },
            messages: {
                required: "Doit être rempli",
                remote: "Please fix this field.",
                email: "Please enter a valid email address.",
                url: "Please enter a valid URL.",
                date: "Please enter a valid date.",
                dateISO: "Please enter a valid date (ISO).",
                number: "Please enter a valid number.",
                digits: "Please enter only digits.",
                creditcard: "Please enter a valid credit card number.",
                equalTo: "Please enter the same value again.",
                maxlength: e.validator.format("Veuillez entrer un numéro de téléphone valide à {0} chiffres commençant par zéro."),
                minlength: e.validator.format("Veuillez entrer un numéro de téléphone valide à {0} chiffres commençant par zéro."),
                rangelength: e.validator.format("Please enter a value between {0} and {1} characters long."),
                range: e.validator.format("Please enter a value between {0} and {1}."),
                max: e.validator.format("Please enter a value less than or equal to {0}."),
                min: e.validator.format("Please enter a value greater than or equal to {0}.")
            },
            autoCreateRanges: !1,
            prototype: {
                init: function() {
                    function t(t) {
                        var a = e.data(this[0].form, "validator"),
                            n = "on" + t.type.replace(/^validate/, "");
                        a.settings[n] && a.settings[n].call(a, this[0], t)
                    }
                    this.labelContainer = e(this.settings.errorLabelContainer), this.errorContext = this.labelContainer.length && this.labelContainer || e(this.currentForm), this.containers = e(this.settings.errorContainer).add(this.settings.errorLabelContainer), this.submitted = {}, this.valueCache = {}, this.pendingRequest = 0, this.pending = {}, this.invalid = {}, this.reset();
                    var a = this.groups = {};
                    e.each(this.settings.groups, function(t, n) {
                        "string" == typeof n && (n = n.split(/\s/)), e.each(n, function(e, n) {
                            a[n] = t
                        })
                    });
                    var n = this.settings.rules;
                    e.each(n, function(t, a) {
                        n[t] = e.validator.normalizeRule(a)
                    }), e(this.currentForm).validateDelegate(":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'] ,[type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'] ", "focusin focusout keyup", t).validateDelegate("[type='radio'], [type='checkbox'], select, option", "click", t), this.settings.invalidHandler && e(this.currentForm).bind("invalid-form.validate", this.settings.invalidHandler)
                },
                form: function() {
                    return this.checkForm(), e.extend(this.submitted, this.errorMap), this.invalid = e.extend({}, this.errorMap), this.valid() || e(this.currentForm).triggerHandler("invalid-form", [this]), this.showErrors(), this.valid()
                },
                checkForm: function() {
                    this.prepareForm();
                    for (var e = 0, t = this.currentElements = this.elements(); t[e]; e++) this.check(t[e]);
                    return this.valid()
                },
                element: function(t) {
                    t = this.validationTargetFor(this.clean(t)), this.lastElement = t, this.prepareElement(t), this.currentElements = e(t);
                    var a = this.check(t) !== !1;
                    return a ? delete this.invalid[t.name] : this.invalid[t.name] = !0, this.numberOfInvalids() || (this.toHide = this.toHide.add(this.containers)), this.showErrors(), a
                },
                showErrors: function(t) {
                    if (t) {
                        e.extend(this.errorMap, t), this.errorList = [];
                        for (var a in t) this.errorList.push({
                            message: t[a],
                            element: this.findByName(a)[0]
                        });
                        this.successList = e.grep(this.successList, function(e) {
                            return !(e.name in t)
                        })
                    }
                    this.settings.showErrors ? this.settings.showErrors.call(this, this.errorMap, this.errorList) : this.defaultShowErrors()
                },
                resetForm: function() {
                    e.fn.resetForm && e(this.currentForm).resetForm(), this.submitted = {}, this.lastElement = null, this.prepareForm(), this.hideErrors(), this.elements().removeClass(this.settings.errorClass).removeData("previousValue")
                },
                numberOfInvalids: function() {
                    return this.objectLength(this.invalid)
                },
                objectLength: function(e) {
                    var t = 0;
                    for (var a in e) t++;
                    return t
                },
                hideErrors: function() {
                    this.addWrapper(this.toHide).hide()
                },
                valid: function() {
                    return 0 === this.size()
                },
                size: function() {
                    return this.errorList.length
                },
                focusInvalid: function() {
                    if (this.settings.focusInvalid) try {
                        e(this.findLastActive() || this.errorList.length && this.errorList[0].element || []).filter(":visible").focus().trigger("focusin")
                    } catch (t) {}
                },
                findLastActive: function() {
                    var t = this.lastActive;
                    return t && 1 === e.grep(this.errorList, function(e) {
                        return e.element.name === t.name
                    }).length && t
                },
                elements: function() {
                    var t = this,
                        a = {};
                    return e(this.currentForm).find("input, select, textarea").not(":submit, :reset, :image, [disabled]").not(this.settings.ignore).filter(function() {
                        if (!this.name) throw window.console && console.error("%o has no name assigned", this), new Error("Failed to validate, found an element with no name assigned. See console for element reference.");
                        return this.name in a || !t.objectLength(e(this).rules()) ? !1 : (a[this.name] = !0, !0)
                    })
                },
                clean: function(t) {
                    return e(t)[0]
                },
                errors: function() {
                    var t = this.settings.errorClass.replace(" ", ".");
                    return e(this.settings.errorElement + "." + t, this.errorContext)
                },
                reset: function() {
                    this.successList = [], this.errorList = [], this.errorMap = {}, this.toShow = e([]), this.toHide = e([]), this.currentElements = e([])
                },
                prepareForm: function() {
                    this.reset(), this.toHide = this.errors().add(this.containers)
                },
                prepareElement: function(e) {
                    this.reset(), this.toHide = this.errorsFor(e)
                },
                elementValue: function(t) {
                    var a = e(t).attr("type"),
                        n = e(t).val();
                    return "radio" === a || "checkbox" === a ? e("input[name='" + e(t).attr("name") + "']:checked").val() : "string" == typeof n ? n.replace(/\r/g, "") : n
                },
                check: function(t) {
                    t = this.validationTargetFor(this.clean(t));
                    var a, n = e(t).rules(),
                        i = !1,
                        s = this.elementValue(t);
                    for (var r in n) {
                        var o = {
                            method: r,
                            parameters: n[r]
                        };
                        try {
                            if (a = e.validator.methods[r].call(this, s, t, o.parameters), "dependency-mismatch" === a) {
                                i = !0;
                                continue
                            }
                            if (i = !1, "pending" === a) return void(this.toHide = this.toHide.not(this.errorsFor(t)));
                            if (!a) return this.formatAndAdd(t, o), !1
                        } catch (l) {
                            throw this.settings.debug && window.console && console.log("Exception occured when checking element " + t.id + ", check the '" + o.method + "' method.", l), l
                        }
                    }
                    return i ? void 0 : (this.objectLength(n) && this.successList.push(t), !0)
                },
                customDataMessage: function(t, a) {
                    return e(t).data("msg-" + a.toLowerCase()) || t.attributes && e(t).attr("data-msg-" + a.toLowerCase())
                },
                customMessage: function(e, t) {
                    var a = this.settings.messages[e];
                    return a && (a.constructor === String ? a : a[t])
                },
                findDefined: function() {
                    for (var e = 0; e < arguments.length; e++)
                        if (void 0 !== arguments[e]) return arguments[e];
                    return void 0
                },
                defaultMessage: function(t, a) {
                    return this.findDefined(this.customMessage(t.name, a), this.customDataMessage(t, a), !this.settings.ignoreTitle && t.title || void 0, e.validator.messages[a], "<strong>Warning: No message defined for " + t.name + "</strong>")
                },
                formatAndAdd: function(t, a) {
                    var n = this.defaultMessage(t, a.method),
                        i = /\$?\{(\d+)\}/g;
                    "function" == typeof n ? n = n.call(this, a.parameters, t) : i.test(n) && (n = e.validator.format(n.replace(i, "{$1}"), a.parameters)), this.errorList.push({
                        message: n,
                        element: t
                    }), this.errorMap[t.name] = n, this.submitted[t.name] = n
                },
                addWrapper: function(e) {
                    return this.settings.wrapper && (e = e.add(e.parent(this.settings.wrapper))), e
                },
                defaultShowErrors: function() {
                    var e, t;
                    for (e = 0; this.errorList[e]; e++) {
                        var a = this.errorList[e];
                        this.settings.highlight && this.settings.highlight.call(this, a.element, this.settings.errorClass, this.settings.validClass), this.showLabel(a.element, a.message)
                    }
                    if (this.errorList.length && (this.toShow = this.toShow.add(this.containers)), this.settings.success)
                        for (e = 0; this.successList[e]; e++) this.showLabel(this.successList[e]);
                    if (this.settings.unhighlight)
                        for (e = 0, t = this.validElements(); t[e]; e++) this.settings.unhighlight.call(this, t[e], this.settings.errorClass, this.settings.validClass);
                    this.toHide = this.toHide.not(this.toShow), this.hideErrors(), this.addWrapper(this.toShow).show()
                },
                validElements: function() {
                    return this.currentElements.not(this.invalidElements())
                },
                invalidElements: function() {
                    return e(this.errorList).map(function() {
                        return this.element
                    })
                },
                showLabel: function(t, a) {
                    var n = this.errorsFor(t);
                    n.length ? (n.removeClass(this.settings.validClass).addClass(this.settings.errorClass), n.attr("generated") && n.html(a)) : (n = e("<" + this.settings.errorElement + "/>").attr({
                        "for": this.idOrName(t),
                        generated: !0
                    }).addClass(this.settings.errorClass).html(a || ""), this.settings.wrapper && (n = n.hide().show().wrap("<" + this.settings.wrapper + "/>").parent()), this.labelContainer.append(n).length || (this.settings.errorPlacement ? this.settings.errorPlacement(n, e(t)) : n.insertAfter(t))), !a && this.settings.success && (n.text(""), "string" == typeof this.settings.success ? n.addClass(this.settings.success) : this.settings.success(n, t)), this.toShow = this.toShow.add(n)
                },
                errorsFor: function(t) {
                    var a = this.idOrName(t);
                    return this.errors().filter(function() {
                        return e(this).attr("for") === a
                    })
                },
                idOrName: function(e) {
                    return this.groups[e.name] || (this.checkable(e) ? e.name : e.id || e.name)
                },
                validationTargetFor: function(e) {
                    return this.checkable(e) && (e = this.findByName(e.name).not(this.settings.ignore)[0]), e
                },
                checkable: function(e) {
                    return /radio|checkbox/i.test(e.type)
                },
                findByName: function(t) {
                    return e(this.currentForm).find("[name='" + t + "']")
                },
                getLength: function(t, a) {
                    switch (a.nodeName.toLowerCase()) {
                        case "select":
                            return e("option:selected", a).length;
                        case "input":
                            if (this.checkable(a)) return this.findByName(a.name).filter(":checked").length
                    }
                    return t.length
                },
                depend: function(e, t) {
                    return this.dependTypes[typeof e] ? this.dependTypes[typeof e](e, t) : !0
                },
                dependTypes: {
                    "boolean": function(e) {
                        return e
                    },
                    string: function(t, a) {
                        return !!e(t, a.form).length
                    },
                    "function": function(e, t) {
                        return e(t)
                    }
                },
                optional: function(t) {
                    var a = this.elementValue(t);
                    return !e.validator.methods.required.call(this, a, t) && "dependency-mismatch"
                },
                startRequest: function(e) {
                    this.pending[e.name] || (this.pendingRequest++, this.pending[e.name] = !0)
                },
                stopRequest: function(t, a) {
                    this.pendingRequest--, this.pendingRequest < 0 && (this.pendingRequest = 0), delete this.pending[t.name], a && 0 === this.pendingRequest && this.formSubmitted && this.form() ? (e(this.currentForm).submit(), this.formSubmitted = !1) : !a && 0 === this.pendingRequest && this.formSubmitted && (e(this.currentForm).triggerHandler("invalid-form", [this]), this.formSubmitted = !1)
                },
                previousValue: function(t) {
                    return e.data(t, "previousValue") || e.data(t, "previousValue", {
                        old: null,
                        valid: !0,
                        message: this.defaultMessage(t, "remote")
                    })
                }
            },
            classRuleSettings: {
                required: {
                    required: !0
                },
                email: {
                    email: !0
                },
                url: {
                    url: !0
                },
                date: {
                    date: !0
                },
                dateISO: {
                    dateISO: !0
                },
                number: {
                    number: !0
                },
                digits: {
                    digits: !0
                },
                creditcard: {
                    creditcard: !0
                }
            },
            addClassRules: function(t, a) {
                t.constructor === String ? this.classRuleSettings[t] = a : e.extend(this.classRuleSettings, t)
            },
            classRules: function(t) {
                var a = {},
                    n = e(t).attr("class");
                return n && e.each(n.split(" "), function() {
                    this in e.validator.classRuleSettings && e.extend(a, e.validator.classRuleSettings[this])
                }), a
            },
            attributeRules: function(t) {
                var a = {},
                    n = e(t);
                for (var i in e.validator.methods) {
                    var s;
                    "required" === i ? (s = n.get(0).getAttribute(i), "" === s && (s = !0), s = !!s) : s = n.attr(i), s ? a[i] = s : n[0].getAttribute("type") === i && (a[i] = !0)
                }
                return a.maxlength && /-1|2147483647|524288/.test(a.maxlength) && delete a.maxlength, a
            },
            dataRules: function(t) {
                var a, n, i = {},
                    s = e(t);
                for (a in e.validator.methods) n = s.data("rule-" + a.toLowerCase()), void 0 !== n && (i[a] = n);
                return i
            },
            staticRules: function(t) {
                var a = {},
                    n = e.data(t.form, "validator");
                return n.settings.rules && (a = e.validator.normalizeRule(n.settings.rules[t.name]) || {}), a
            },
            normalizeRules: function(t, a) {
                return e.each(t, function(n, i) {
                    if (i === !1) return void delete t[n];
                    if (i.param || i.depends) {
                        var s = !0;
                        switch (typeof i.depends) {
                            case "string":
                                s = !!e(i.depends, a.form).length;
                                break;
                            case "function":
                                s = i.depends.call(a, a)
                        }
                        s ? t[n] = void 0 !== i.param ? i.param : !0 : delete t[n]
                    }
                }), e.each(t, function(n, i) {
                    t[n] = e.isFunction(i) ? i(a) : i
                }), e.each(["minlength", "maxlength", "min", "max"], function() {
                    t[this] && (t[this] = Number(t[this]))
                }), e.each(["rangelength", "range"], function() {
                    var a;
                    t[this] && (e.isArray(t[this]) ? t[this] = [Number(t[this][0]), Number(t[this][1])] : "string" == typeof t[this] && (a = t[this].split(/[\s,]+/), t[this] = [Number(a[0]), Number(a[1])]))
                }), e.validator.autoCreateRanges && (t.min && t.max && (t.range = [t.min, t.max], delete t.min, delete t.max), t.minlength && t.maxlength && (t.rangelength = [t.minlength, t.maxlength], delete t.minlength, delete t.maxlength)), t
            },
            normalizeRule: function(t) {
                if ("string" == typeof t) {
                    var a = {};
                    e.each(t.split(/\s/), function() {
                        a[this] = !0
                    }), t = a
                }
                return t
            },
            addMethod: function(t, a, n) {
                e.validator.methods[t] = a, e.validator.messages[t] = void 0 !== n ? n : e.validator.messages[t], a.length < 3 && e.validator.addClassRules(t, e.validator.normalizeRule(t))
            },
            methods: {
                required: function(t, a, n) {
                    if (!this.depend(n, a)) return "dependency-mismatch";
                    if ("select" === a.nodeName.toLowerCase()) {
                        var i = e(a).val();
                        return i && i.length > 0
                    }
                    return this.checkable(a) ? this.getLength(t, a) > 0 : e.trim(t).length > 0
                },
                remote: function(t, a, n) {
                    if (this.optional(a)) return "dependency-mismatch";
                    var i = this.previousValue(a);
                    if (this.settings.messages[a.name] || (this.settings.messages[a.name] = {}), i.originalMessage = this.settings.messages[a.name].remote, this.settings.messages[a.name].remote = i.message, n = "string" == typeof n && {
                            url: n
                        } || n, i.old === t) return i.valid;
                    i.old = t;
                    var s = this;
                    this.startRequest(a);
                    var r = {};
                    return r[a.name] = t, e.ajax(e.extend(!0, {
                        url: n,
                        mode: "abort",
                        port: "validate" + a.name,
                        dataType: "json",
                        data: r,
                        success: function(n) {
                            s.settings.messages[a.name].remote = i.originalMessage;
                            var r = n === !0 || "true" === n;
                            if (r) {
                                var o = s.formSubmitted;
                                s.prepareElement(a), s.formSubmitted = o, s.successList.push(a), delete s.invalid[a.name], s.showErrors()
                            } else {
                                var l = {},
                                    u = n || s.defaultMessage(a, "remote");
                                l[a.name] = i.message = e.isFunction(u) ? u(t) : u, s.invalid[a.name] = !0, s.showErrors(l)
                            }
                            i.valid = r, s.stopRequest(a, r)
                        }
                    }, n)), "pending"
                },
                minlength: function(t, a, n) {
                    var i = e.isArray(t) ? t.length : this.getLength(e.trim(t), a);
                    return this.optional(a) || i >= n
                },
                maxlength: function(t, a, n) {
                    var i = e.isArray(t) ? t.length : this.getLength(e.trim(t), a);
                    return this.optional(a) || n >= i
                },
                rangelength: function(t, a, n) {
                    var i = e.isArray(t) ? t.length : this.getLength(e.trim(t), a);
                    return this.optional(a) || i >= n[0] && i <= n[1]
                },
                min: function(e, t, a) {
                    return this.optional(t) || e >= a
                },
                max: function(e, t, a) {
                    return this.optional(t) || a >= e
                },
                range: function(e, t, a) {
                    return this.optional(t) || e >= a[0] && e <= a[1]
                },
                email: function(e, t) {
                    return this.optional(t) || /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(e)
                },
                url: function(e, t) {
                    return this.optional(t) || /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(e)
                },
                date: function(e, t) {
                    return this.optional(t) || !/Invalid|NaN/.test(new Date(e).toString())
                },
                dateISO: function(e, t) {
                    return this.optional(t) || /^\d{4}[\/\-]\d{1,2}[\/\-]\d{1,2}$/.test(e)
                },
                number: function(e, t) {
                    return this.optional(t) || /^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(e)
                },
                digits: function(e, t) {
                    return this.optional(t) || /^\d+$/.test(e)
                },
                creditcard: function(e, t) {
                    if (this.optional(t)) return "dependency-mismatch";
                    if (/[^0-9 \-]+/.test(e)) return !1;
                    var a = 0,
                        n = 0,
                        i = !1;
                    e = e.replace(/\D/g, "");
                    for (var s = e.length - 1; s >= 0; s--) {
                        var r = e.charAt(s);
                        n = parseInt(r, 10), i && (n *= 2) > 9 && (n -= 9), a += n, i = !i
                    }
                    return a % 10 === 0
                },
                equalTo: function(t, a, n) {
                    var i = e(n);
                    return this.settings.onfocusout && i.unbind(".validate-equalTo").bind("blur.validate-equalTo", function() {
                        e(a).valid()
                    }), t === i.val()
                }
            }
        }), e.format = e.validator.format
    }(jQuery),
    function(e) {
        var t = {};
        if (e.ajaxPrefilter) e.ajaxPrefilter(function(e, a, n) {
            var i = e.port;
            "abort" === e.mode && (t[i] && t[i].abort(), t[i] = n)
        });
        else {
            var a = e.ajax;
            e.ajax = function(n) {
                var i = ("mode" in n ? n : e.ajaxSettings).mode,
                    s = ("port" in n ? n : e.ajaxSettings).port;
                return "abort" === i ? (t[s] && t[s].abort(), t[s] = a.apply(this, arguments)) : a.apply(this, arguments)
            }
        }
    }(jQuery),
    function(e) {
        e.extend(e.fn, {
            validateDelegate: function(t, a, n) {
                return this.bind(a, function(a) {
                    var i = e(a.target);
                    return i.is(t) ? n.apply(i, arguments) : void 0
                })
            }
        })
    }(jQuery),
    function(e) {
        "function" == typeof define && define.amd ? define(["jquery"], e) : e("object" == typeof exports ? require("jquery") : jQuery)
    }(function(e) {
        var t, a = navigator.userAgent,
            n = /iphone/i.test(a),
            i = /chrome/i.test(a),
            s = /android/i.test(a);
        e.mask = {
            definitions: {
                9: "[0-9]",
                a: "[A-Za-z]",
                "*": "[A-Za-z0-9]"
            },
            autoclear: !0,
            dataName: "rawMaskFn",
            placeholder: "_"
        }, e.fn.extend({
            caret: function(e, t) {
                var a;
                if (0 !== this.length && !this.is(":hidden")) return "number" == typeof e ? (t = "number" == typeof t ? t : e, this.each(function() {
                    this.setSelectionRange ? this.setSelectionRange(e, t) : this.createTextRange && (a = this.createTextRange(), a.collapse(!0), a.moveEnd("character", t), a.moveStart("character", e), a.select())
                })) : (this[0].setSelectionRange ? (e = this[0].selectionStart, t = this[0].selectionEnd) : document.selection && document.selection.createRange && (a = document.selection.createRange(), e = 0 - a.duplicate().moveStart("character", -1e5), t = e + a.text.length), {
                    begin: e,
                    end: t
                })
            },
            unmask: function() {
                return this.trigger("unmask")
            },
            mask: function(a, r) {
                var o, l, u, d, c, h, m, v;
                if (!a && this.length > 0) {
                    o = e(this[0]);
                    var f = o.data(e.mask.dataName);
                    return f ? f() : void 0
                }
                return r = e.extend({
                    autoclear: e.mask.autoclear,
                    placeholder: e.mask.placeholder,
                    completed: null
                }, r), l = e.mask.definitions, u = [], d = m = a.length, c = null, e.each(a.split(""), function(e, t) {
                    "?" == t ? (m--, d = e) : l[t] ? (u.push(new RegExp(l[t])), null === c && (c = u.length - 1), d > e && (h = u.length - 1)) : u.push(null)
                }), this.trigger("unmask").each(function() {
                    function o() {
                        if (r.completed) {
                            for (var e = c; h >= e; e++)
                                if (u[e] && T[e] === f(e)) return;
                            r.completed.call(N)
                        }
                    }

                    function f(e) {
                        return r.placeholder.charAt(e < r.placeholder.length ? e : 0)
                    }

                    function p(e) {
                        for (; ++e < m && !u[e];);
                        return e
                    }

                    function g(e) {
                        for (; --e >= 0 && !u[e];);
                        return e
                    }

                    function F(e, t) {
                        var a, n;
                        if (!(0 > e)) {
                            for (a = e, n = p(t); m > a; a++)
                                if (u[a]) {
                                    if (!(m > n && u[a].test(T[n]))) break;
                                    T[a] = T[n], T[n] = f(n), n = p(n)
                                }
                            k(), N.caret(Math.max(c, e))
                        }
                    }

                    function b(e) {
                        var t, a, n, i;
                        for (t = e, a = f(e); m > t; t++)
                            if (u[t]) {
                                if (n = p(t), i = T[t], T[t] = a, !(m > n && u[n].test(i))) break;
                                a = i
                            }
                    }

                    function y() {
                        var e = N.val(),
                            t = N.caret();
                        if (v && v.length && v.length > e.length) {
                            for (D(!0); t.begin > 0 && !u[t.begin - 1];) t.begin--;
                            if (0 === t.begin)
                                for (; t.begin < c && !u[t.begin];) t.begin++;
                            N.caret(t.begin, t.begin)
                        } else {
                            for (D(!0); t.begin < m && !u[t.begin];) t.begin++;
                            N.caret(t.begin, t.begin)
                        }
                        o()
                    }

                    function x() {
                        D(), N.val() != E && N.change()
                    }

                    function C(e) {
                        if (!N.prop("readonly")) {
                            var t, a, i, s = e.which || e.keyCode;
                            v = N.val(), 8 === s || 46 === s || n && 127 === s ? (t = N.caret(), a = t.begin, i = t.end, i - a === 0 && (a = 46 !== s ? g(a) : i = p(a - 1), i = 46 === s ? p(i) : i), S(a, i), F(a, i - 1), e.preventDefault()) : 13 === s ? x.call(this, e) : 27 === s && (N.val(E), N.caret(0, D()), e.preventDefault())
                        }
                    }

                    function w(t) {
                        if (!N.prop("readonly")) {
                            var a, n, i, r = t.which || t.keyCode,
                                l = N.caret();
                            if (!(t.ctrlKey || t.altKey || t.metaKey || 32 > r) && r && 13 !== r) {
                                if (l.end - l.begin !== 0 && (S(l.begin, l.end), F(l.begin, l.end - 1)), a = p(l.begin - 1), m > a && (n = String.fromCharCode(r), u[a].test(n))) {
                                    if (b(a), T[a] = n, k(), i = p(a), s) {
                                        var d = function() {
                                            e.proxy(e.fn.caret, N, i)()
                                        };
                                        setTimeout(d, 0)
                                    } else N.caret(i);
                                    l.begin <= h && o()
                                }
                                t.preventDefault()
                            }
                        }
                    }

                    function S(e, t) {
                        var a;
                        for (a = e; t > a && m > a; a++) u[a] && (T[a] = f(a))
                    }

                    function k() {
                        N.val(T.join(""))
                    }

                    function D(e) {
                        var t, a, n, i = N.val(),
                            s = -1;
                        for (t = 0, n = 0; m > t; t++)
                            if (u[t]) {
                                for (T[t] = f(t); n++ < i.length;)
                                    if (a = i.charAt(n - 1), u[t].test(a)) {
                                        T[t] = a, s = t;
                                        break
                                    }
                                if (n > i.length) {
                                    S(t + 1, m);
                                    break
                                }
                            } else T[t] === i.charAt(n) && n++, d > t && (s = t);
                        return e ? k() : d > s + 1 ? r.autoclear || T.join("") === A ? (N.val() && N.val(""), S(0, m)) : k() : (k(), N.val(N.val().substring(0, s + 1))), d ? t : c
                    }
                    var N = e(this),
                        T = e.map(a.split(""), function(e, t) {
                            return "?" != e ? l[e] ? f(t) : e : void 0
                        }),
                        A = T.join(""),
                        E = N.val();
                    N.data(e.mask.dataName, function() {
                        return e.map(T, function(e, t) {
                            return u[t] && e != f(t) ? e : null
                        }).join("")
                    }), N.one("unmask", function() {
                        N.off(".mask").removeData(e.mask.dataName)
                    }).on("focus.mask", function() {
                        if (!N.prop("readonly")) {
                            clearTimeout(t);
                            var e;
                            E = N.val(), e = D(), t = setTimeout(function() {
                                N.get(0) === document.activeElement && (k(), e == a.replace("?", "").length ? N.caret(0, e) : N.caret(e))
                            }, 10)
                        }
                    }).on("blur.mask", x).on("keydown.mask", C).on("keypress.mask", w).on("input.mask paste.mask", function() {
                        N.prop("readonly") || setTimeout(function() {
                            var e = D(!0);
                            N.caret(e), o()
                        }, 0)
                    }), i && s && N.off("input.mask").on("input.mask", y), D()
                })
            }
        })
    });