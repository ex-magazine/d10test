!(function (e, t) { typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = t() : typeof define === 'function' && define.amd ? define(t) : (e = typeof globalThis !== 'undefined' ? globalThis : e || self).MicroModal = t() }(this, function () { 'use strict'; function e (e, t) { for (let o = 0; o < t.length; o++) { const n = t[o]; n.enumerable = n.enumerable || !1, n.configurable = !0, 'value' in n && (n.writable = !0), Object.defineProperty(e, n.key, n) } } function t (e) { return (function (e) { if (Array.isArray(e)) return o(e) }(e)) || (function (e) { if (typeof Symbol !== 'undefined' && Symbol.iterator in Object(e)) return Array.from(e) }(e)) || (function (e, t) { if (!e) return; if (typeof e === 'string') return o(e, t); let n = Object.prototype.toString.call(e).slice(8, -1); n === 'Object' && e.constructor && (n = e.constructor.name); if (n === 'Map' || n === 'Set') return Array.from(e); if (n === 'Arguments' || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return o(e, t) }(e)) || (function () { throw new TypeError('Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.') }()) } function o (e, t) { (t == null || t > e.length) && (t = e.length); for (var o = 0, n = new Array(t); o < t; o++)n[o] = e[o]; return n } let n; let i; let a; let r; let s; const l = (n = ['a[href]', 'area[href]', 'input:not([disabled]):not([type="hidden"]):not([aria-hidden])', 'select:not([disabled]):not([aria-hidden])', 'textarea:not([disabled]):not([aria-hidden])', 'button:not([disabled]):not([aria-hidden])', 'iframe', 'object', 'embed', '[contenteditable]', '[tabindex]:not([tabindex^="-"])'], i = (function () { function o (e) { const n = e.targetModal; const i = e.triggers; const a = void 0 === i ? [] : i; const r = e.onShow; const s = void 0 === r ? function () { } : r; const l = e.onClose; const c = void 0 === l ? function () { } : l; const d = e.openTrigger; const u = void 0 === d ? 'data-micromodal-trigger' : d; const f = e.closeTrigger; const h = void 0 === f ? 'data-micromodal-close' : f; const v = e.openClass; const g = void 0 === v ? 'is-open' : v; const m = e.disableScroll; const b = void 0 !== m && m; const y = e.disableFocus; const p = void 0 !== y && y; const w = e.awaitCloseAnimation; const E = void 0 !== w && w; const k = e.awaitOpenAnimation; const M = void 0 !== k && k; const A = e.debugMode; const C = void 0 !== A && A; !(function (e, t) { if (!(e instanceof t)) throw new TypeError('Cannot call a class as a function') }(this, o)), this.modal = document.getElementById(n), this.config = { debugMode: C, disableScroll: b, openTrigger: u, closeTrigger: h, openClass: g, onShow: s, onClose: c, awaitCloseAnimation: E, awaitOpenAnimation: M, disableFocus: p }, a.length > 0 && this.registerTriggers.apply(this, t(a)), this.onClick = this.onClick.bind(this), this.onKeydown = this.onKeydown.bind(this) } let i, a, r; return i = o, (a = [{ key: 'registerTriggers', value: function () { for (var e = this, t = arguments.length, o = new Array(t), n = 0; n < t; n++)o[n] = arguments[n]; o.filter(Boolean).forEach(function (t) { t.addEventListener('click', function (t) { return e.showModal(t) }) }) } }, { key: 'showModal', value: function () { const e = this; const t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null; if (this.activeElement = document.activeElement, this.modal.setAttribute('aria-hidden', 'false'), this.modal.classList.add(this.config.openClass), this.scrollBehaviour('disable'), this.addEventListeners(), this.config.awaitOpenAnimation) { const o = function t () { e.modal.removeEventListener('animationend', t, !1), e.setFocusToFirstNode() }; this.modal.addEventListener('animationend', o, !1) } else this.setFocusToFirstNode(); this.config.onShow(this.modal, this.activeElement, t) } }, { key: 'closeModal', value: function () { const e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null; const t = this.modal; if (this.modal.setAttribute('aria-hidden', 'true'), this.removeEventListeners(), this.scrollBehaviour('enable'), this.activeElement && this.activeElement.focus && this.activeElement.focus(), this.config.onClose(this.modal, this.activeElement, e), this.config.awaitCloseAnimation) { const o = this.config.openClass; this.modal.addEventListener('animationend', function e () { t.classList.remove(o), t.removeEventListener('animationend', e, !1) }, !1) } else t.classList.remove(this.config.openClass) } }, { key: 'closeModalById', value: function (e) { this.modal = document.getElementById(e), this.modal && this.closeModal() } }, { key: 'scrollBehaviour', value: function (e) { if (this.config.disableScroll) { const t = document.querySelector('body'); switch (e) { case 'enable': Object.assign(t.style, { overflow: '' }); break; case 'disable': Object.assign(t.style, { overflow: 'hidden' }) } } } }, { key: 'addEventListeners', value: function () { this.modal.addEventListener('touchstart', this.onClick), this.modal.addEventListener('click', this.onClick), document.addEventListener('keydown', this.onKeydown) } }, { key: 'removeEventListeners', value: function () { this.modal.removeEventListener('touchstart', this.onClick), this.modal.removeEventListener('click', this.onClick), document.removeEventListener('keydown', this.onKeydown) } }, { key: 'onClick', value: function (e) { (e.target.hasAttribute(this.config.closeTrigger) || e.target.parentNode.hasAttribute(this.config.closeTrigger)) && (e.preventDefault(), e.stopPropagation(), this.closeModal(e)) } }, { key: 'onKeydown', value: function (e) { e.keyCode === 27 && this.closeModal(e), e.keyCode === 9 && this.retainFocus(e) } }, { key: 'getFocusableNodes', value: function () { const e = this.modal.querySelectorAll(n); return Array.apply(void 0, t(e)) } }, { key: 'setFocusToFirstNode', value: function () { const e = this; if (!this.config.disableFocus) { const t = this.getFocusableNodes(); if (t.length !== 0) { const o = t.filter(function (t) { return !t.hasAttribute(e.config.closeTrigger) }); o.length > 0 && o[0].focus(), o.length === 0 && t[0].focus() } } } }, { key: 'retainFocus', value: function (e) { let t = this.getFocusableNodes(); if (t.length !== 0) if (t = t.filter(function (e) { return e.offsetParent !== null }), this.modal.contains(document.activeElement)) { const o = t.indexOf(document.activeElement); e.shiftKey && o === 0 && (t[t.length - 1].focus(), e.preventDefault()), !e.shiftKey && t.length > 0 && o === t.length - 1 && (t[0].focus(), e.preventDefault()) } else t[0].focus() } }]) && e(i.prototype, a), r && e(i, r), o }()), a = null, r = function (e) { if (!document.getElementById(e)) return console.warn("MicroModal: ❗Seems like you have missed %c'".concat(e, "'"), 'background-color: #f8f9fa;color: #50596c;font-weight: bold;', 'ID somewhere in your code. Refer example below to resolve it.'), console.warn('%cExample:', 'background-color: #f8f9fa;color: #50596c;font-weight: bold;', '<div class="modal" id="'.concat(e, '"></div>')), !1 }, s = function (e, t) { if ((function (e) { e.length <= 0 && (console.warn("MicroModal: ❗Please specify at least one %c'micromodal-trigger'", 'background-color: #f8f9fa;color: #50596c;font-weight: bold;', 'data attribute.'), console.warn('%cExample:', 'background-color: #f8f9fa;color: #50596c;font-weight: bold;', '<a href="#" data-micromodal-trigger="my-modal"></a>')) }(e)), !t) return !0; for (const o in t) r(o); return !0 }, { init: function (e) { const o = Object.assign({}, { openTrigger: 'data-micromodal-trigger' }, e); const n = t(document.querySelectorAll('['.concat(o.openTrigger, ']'))); const r = (function (e, t) { const o = []; return e.forEach(function (e) { const n = e.attributes[t].value; void 0 === o[n] && (o[n] = []), o[n].push(e) }), o }(n, o.openTrigger)); if (!0 !== o.debugMode || !1 !== s(n, r)) for (const l in r) { const c = r[l]; o.targetModal = l, o.triggers = t(c), a = new i(o) } }, show: function (e, t) { const o = t || {}; o.targetModal = e, !0 === o.debugMode && !1 === r(e) || (a && a.removeEventListeners(), (a = new i(o)).showModal()) }, close: function (e) { e ? a.closeModalById(e) : a.closeModal() } }); return typeof window !== 'undefined' && (window.MicroModal = l), l }))