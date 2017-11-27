"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var Quantity = function (_React$Component) {
    _inherits(Quantity, _React$Component);

    function Quantity(props) {
        _classCallCheck(this, Quantity);

        var _this = _possibleConstructorReturn(this, _React$Component.call(this, props));

        _this.state = { value: 1 };
        _this.increment = _this.increment.bind(_this);
        _this.decrement = _this.decrement.bind(_this);
        return _this;
    }

    Quantity.prototype.increment = function increment() {
        this.setState(function (prevState) {
            value: ++prevState.value;
        });
    };

    Quantity.prototype.decrement = function decrement() {
        this.setState(function (prevState) {
            value: prevState.value > 0 ? --prevState.value : 0;
        });
    };

    Quantity.prototype.render = function render() {

        return React.createElement(
            "div",
            null,
            React.createElement(
                "p",
                null,
                "Set the quantity"
            ),
            React.createElement(
                "div",
                { className: "quantity-input" },
                React.createElement(
                    "button",
                    { className: "quantity-input__modifier quantity-input__modifier--left", onClick: this.decrement },
                    "—"
                ),
                React.createElement("input", { className: "quantity-input__screen", type: "text", value: this.state.value, readonly: true }),
                React.createElement(
                    "button",
                    { className: "quantity-input__modifier quantity-input__modifier--right", onClick: this.increment },
                    "＋"
                )
            )
        );
    };

    return Quantity;
}(React.Component);

ReactDOM.render(React.createElement(Quantity, null), document.getElementById('app'));





