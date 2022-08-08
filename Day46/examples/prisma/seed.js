const { PrismaClient } = require("@prisma/client");
const prisma = new PrismaClient();
(async function main() {
  try {
    const alex1 = await prisma.user.upsert({
      where: {
        name: "Alex",
      },
      create: {
        name: "Alex",
        quote: "Alex the great Lion.",
      },
      update: {},
    });
  } catch (e) {
    console.error(e);
    process.exit(1);
  } finally {
    await prisma.$disconnect();
  }
})();
