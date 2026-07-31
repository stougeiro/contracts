![phpstan-level](https://img.shields.io/badge/PHPStan-Level%209-brightgreen)

# Contracts

A set of stable, framework‑independent contracts that define core architectural abstractions for PHP applications.

These interfaces establish consistent patterns for dependency resolution, service lifecycle management, modular composition, and component interoperability, allowing different implementations to share a common foundation.

The goal of this monorepo is to offer **clear, explicit, and SOLID‑oriented contracts** that can be implemented by any framework, library, or application that follows Sourcerer's modular philosophy.

## 🧱 Architecture Philosophy

These contracts follow a strict set of principles:
- Explicit over implicit
- Factories over autowiring
- Lifecycle over magic
- Contracts over assumptions
- Modularity over monolith
- Agnostic over opinionated

They are designed to be implemented by any ecosystem that values clarity, predictability, and strong architectural boundaries.

---

## 📚 Packages

### 1. `stougeiro/container-contract`
Interfaces and contracts for implementing dependency injection containers in PHP, covering lifecycle handling, service resolution and factory-based instantiation.

🔗 **Repository:** [stougeiro/container-contract](https://github.com/stougeiro/contracts/tree/master/container-contract)


📦 **Install**  
```bash
composer require stougeiro/container-contract
```

---

## 🧠 Why?

Because architectural boundaries matter and explicit architecture scales. These contracts exist to separate what a component does from how it is implemented. By defining clear, stable interfaces, different containers, modules, and applications can interoperate without being tightly coupled to a specific framework or implementation.

This enables:
- Predictable behavior
- Replaceable implementations
- Modular composition
- Long‑term maintainability
- Explicit and SOLID‑driven architecture

---

## 🤝 Contributions

Contributions are welcome.
Feel free to open issues or submit pull requests in any of the contract repositories.

<br><br>

[<img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" width="170"/>](https://www.buymeacoffee.com/stougeiro)